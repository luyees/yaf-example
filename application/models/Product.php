<?php
namespace App\Models;

class Product extends EloquentModel
{
	protected $table = 'product_base';
    protected $guarded = ['id'];
}