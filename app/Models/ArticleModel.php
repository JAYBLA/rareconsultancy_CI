<?php

namespace App\Models;

use CodeIgniter\Model;

class ArticleModel extends Model
{
  protected $table = 'articles';
  protected $primary_key = 'id';
  protected $allowedFields = [
      'title',
      'description'
  ];


}