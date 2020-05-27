
<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
  protected $fillable = [
      protected $fillable = [
      'user_id',
      'category_id',
      'title',
      'summary',
      'body',
      'slug'
  ];

  public function category()
   {
       return $this->belongsTo('App\Category');
   }

  public function user()
    {
      return $this->belongsTo('App\User');
    }


}
