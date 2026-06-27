# SCHEMA.md

# Clitoria Digital Commerce Platform

Version 1.0

---

# Database Convention

## Primary Key

Semua tabel menggunakan:

```php
$table->id();
```

---

## Timestamp

Semua tabel menggunakan:

```php
$table->timestamps();
```

---

## Soft Delete

Digunakan pada:

* products
* galleries
* testimonials
* teams
* partners

```php
$table->softDeletes();
```

---

# TABLE: users

```php
Schema::create('users', function (Blueprint $table) {
    $table->id();

    $table->string('name');
    $table->string('email')->unique();
    $table->string('password');

    $table->rememberToken();

    $table->timestamps();
});
```

### Index

```sql
UNIQUE(email)
```

---

# TABLE: heroes

```php
Schema::create('heroes', function (Blueprint $table) {
    $table->id();

    $table->string('title');
    $table->text('subtitle')->nullable();

    $table->string('image');

    $table->string('button_text')->nullable();
    $table->string('button_link')->nullable();

    $table->timestamps();
});
```

---

# TABLE: benefits

```php
Schema::create('benefits', function (Blueprint $table) {
    $table->id();

    $table->string('title');
    $table->string('icon');

    $table->boolean('status')
        ->default(true);

    $table->timestamps();
});
```

### Index

```php
$table->index('status');
```

---

# TABLE: products

```php
Schema::create('products', function (Blueprint $table) {
    $table->id();

    $table->string('name');

    $table->string('slug')
        ->unique();

    $table->text('short_description')
        ->nullable();

    $table->longText('description')
        ->nullable();

    $table->string('image');

    $table->boolean('status')
        ->default(true);

    $table->timestamps();

    $table->softDeletes();
});
```

### Index

```php
UNIQUE(slug)
INDEX(status)
```

---

# TABLE: product_prices

```php
Schema::create('product_prices', function (Blueprint $table) {
    $table->id();

    $table->foreignId('product_id')
        ->constrained()
        ->cascadeOnDelete();

    $table->string('package_name');

    $table->enum('type', [
        'single',
        'bundle'
    ]);

    $table->decimal(
        'price',
        12,
        2
    );

    $table->timestamps();
});
```

### Index

```php
$table->index('product_id');
$table->index('type');
```

---

# TABLE: galleries

```php
Schema::create('galleries', function (Blueprint $table) {
    $table->id();

    $table->string('image');

    $table->string('title');

    $table->text('description')
        ->nullable();

    $table->boolean('status')
        ->default(true);

    $table->timestamps();

    $table->softDeletes();
});
```

### Index

```php
$table->index('status');
```

---

# TABLE: testimonials

```php
Schema::create('testimonials', function (Blueprint $table) {
    $table->id();

    $table->string('customer_name');

    $table->string('occupation')
        ->nullable();

    $table->tinyInteger('rating');

    $table->text('review');

    $table->string('photo')
        ->nullable();

    $table->boolean('featured')
        ->default(false);

    $table->timestamps();

    $table->softDeletes();
});
```

### Index

```php
$table->index('featured');
```

---

# TABLE: teams

```php
Schema::create('teams', function (Blueprint $table) {
    $table->id();

    $table->string('name');

    $table->string('position');

    $table->string('photo');

    $table->string('instagram')
        ->nullable();

    $table->string('linkedin')
        ->nullable();

    $table->timestamps();

    $table->softDeletes();
});
```

---

# TABLE: partners

```php
Schema::create('partners', function (Blueprint $table) {
    $table->id();

    $table->string('name');

    $table->string('logo');

    $table->string('website')
        ->nullable();

    $table->timestamps();

    $table->softDeletes();
});
```

---

# TABLE: settings

```php
Schema::create('settings', function (Blueprint $table) {
    $table->id();

    $table->string('key')
        ->unique();

    $table->text('value')
        ->nullable();

    $table->timestamps();
});
```

### Example Data

```text
whatsapp_number
business_email
instagram_url
address
google_maps_embed
meta_title
meta_description
meta_keywords
og_image
```

---

# TABLE: sales

```php
Schema::create('sales', function (Blueprint $table) {
    $table->id();

    $table->date('transaction_date');

    $table->string('customer_name')
        ->nullable();

    $table->decimal(
        'total_amount',
        12,
        2
    );

    $table->text('notes')
        ->nullable();

    $table->foreignId('created_by')
        ->constrained('users')
        ->restrictOnDelete();

    $table->timestamps();
});
```

### Index

```php
$table->index('transaction_date');
$table->index('created_by');
```

---

# TABLE: sales_items

```php
Schema::create('sales_items', function (Blueprint $table) {
    $table->id();

    $table->foreignId('sale_id')
        ->constrained('sales')
        ->cascadeOnDelete();

    $table->foreignId('product_id')
        ->constrained('products')
        ->restrictOnDelete();

    $table->string('product_name');

    $table->unsignedInteger('qty');

    $table->decimal(
        'price',
        12,
        2
    );

    $table->decimal(
        'subtotal',
        12,
        2
    );

    $table->timestamps();
});
```

### Index

```php
$table->index('sale_id');
$table->index('product_id');
```

---

# Foreign Key Rules

## products → product_prices

```text
CASCADE DELETE
```

Jika produk dihapus maka seluruh harga ikut dihapus.

---

## sales → sales_items

```text
CASCADE DELETE
```

Jika sale dihapus maka item sale ikut dihapus.

---

## users → sales

```text
RESTRICT DELETE
```

Admin tidak boleh dihapus jika masih memiliki data penjualan.

---

## products → sales_items

```text
RESTRICT DELETE
```

Menjaga integritas histori penjualan.

---

# Performance Strategy

## Indexed Columns

products.slug
products.status

product_prices.product_id
product_prices.type

sales.transaction_date

sales.created_by

sales_items.sale_id
sales_items.product_id

testimonials.featured

benefits.status
galleries.status

---

# MVP Notes

Tidak dibuat tabel:

* carts
* orders
* order_items
* customers
* inventories

Karena seluruh transaksi masih dilakukan melalui WhatsApp dan sales dicatat secara manual oleh admin.
