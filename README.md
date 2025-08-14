# Blog Project - Category & Post Relationship

**Course:** Laravel Developer  
**Assignment:** 2  

A simple **Blog Project** built with **Laravel**, demonstrating the **relationship between Categories and Posts** using **Eloquent ORM**.  
This project follows **RESTful conventions** and provides full **CRUD functionality** for Categories and Posts.

---

## Table of Contents

- [Project Overview](#project-overview)  
- [Features](#features)  
- [Database Structure](#database-structure)  
- [Models & Relationships](#models--relationships)  
- [Routes](#routes)  
- [Views](#views)  
- [Installation](#installation)  
- [Usage](#usage)  
- [License](#license)  

---

## Project Overview

This project allows you to:

- Manage **Categories** (Create, Read, Update, Delete)  
- Manage **Posts** (Create, Read, Update, Delete)  
- Assign each Post to a Category  
- View Posts grouped by Category  
- Paginate Categories and Posts  

---

## Features

- **Eloquent ORM relationships**: `Category hasMany Posts`, `Post belongsTo Category`  
- **Validation** on creation and update  
- **Bootstrap-styled views**  
- **Pagination** for large lists  
- **RESTful resource routing**  

---

## Database Structure

### Categories Table
| Column      | Type        | Description                  |
|------------|------------|------------------------------|
| id         | bigint      | Primary Key                  |
| name       | string      | Category Name                |
| slug       | string      | URL-friendly unique slug     |
| created_at | timestamp   | Created timestamp            |
| updated_at | timestamp   | Updated timestamp            |

### Posts Table
| Column      | Type        | Description                  |
|------------|------------|------------------------------|
| id         | bigint      | Primary Key                  |
| title      | string      | Post title                   |
| body       | text        | Post content                 |
| category_id| bigint      | Foreign key to Categories    |
| created_at | timestamp   | Created timestamp            |
| updated_at | timestamp   | Updated timestamp            |

---

## Models & Relationships

### Category Model (`Category.php`)

```php
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'slug'];

    public function posts()
    {
        return $this->hasMany(Post::class);
    }
}
