<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\backend\BlogCategory;


class Blog extends Model
{
    use HasFactory;

    protected $fillable = ['blog_category_id', 'title', 'image', 'description', 'status'];

    protected static $fileUrl, $fileObject, $fileName, $fileDirectory, $blog;

    public static function saveBlogs($request,$id = null)
    {

        self::$fileUrl = Blog::uploadBlogFile($request, $id);

        Blog::updateOrCreate(['id' => $id], [
            'blog_category_id'  => $request->blog_category_id,
            'title'             => $request->title,
            'image'             => self::$fileUrl,
            'description'       => $request->description,
            'status'            => $request->status,
        ]);
    }

    public static function uploadBlogFile($request, $id)
    {
        if ($id != null)
        {
            self::$blog = Blog::find($id);
        }
        self::$fileObject = $request->file('image');
        if (isset(self::$fileObject))
        {
            if (isset(self::$blog))
            {
                if (file_exists(self::$blog->image))
                {
                    unlink(self::$blog->image);
                }
            }
            self::$fileName = self::$fileObject->getClientOriginalName();
            self::$fileDirectory = 'backend/uploaded-files/blogs/';
            self::$fileObject->move(self::$fileDirectory, self::$fileName);
            self::$fileUrl = self::$fileDirectory.self::$fileName;
        } else {
            if ($id != null)
            {
                self::$fileUrl = self::$blog->image;
            } else {
                self::$fileUrl = null;
            }
        }

        return self::$fileUrl;
    }

    public function blogCategory()
    {
        return $this->belongsTo(BlogCategory::class );
    }
}
