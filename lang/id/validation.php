<?php

return [
    'required' => 'Kolom :attribute wajib diisi.',
    'max' => [
        'file' => 'Ukuran file :attribute tidak boleh lebih dari :max kilobyte (KB).',
        'string' => 'Panjang teks :attribute tidak boleh lebih dari :max karakter.',
        'numeric' => 'Nilai :attribute tidak boleh lebih dari :max.',
        'array' => 'Kolom :attribute tidak boleh memiliki lebih dari :max item.',
    ],
    'mimes' => 'File :attribute harus berupa salah satu dari tipe berikut: :values.',
    'image' => 'File :attribute harus berupa sebuah gambar.',
    'in' => 'Pilihan :attribute tidak valid.',
    'string' => 'Kolom :attribute harus berupa teks.',
    'integer' => 'Kolom :attribute harus berupa angka bulat.',
    'exists' => 'Data :attribute yang dipilih tidak valid atau tidak ditemukan.',
    'unique' => 'Data :attribute ini sudah digunakan, silakan pilih yang lain.',
    
    // Custom attributes to make messages more informative
    'attributes' => [
        'name' => 'Nama Produk',
        'title' => 'Judul',
        'description' => 'Deskripsi Lengkap',
        'short_description' => 'Deskripsi Singkat',
        'image' => 'Gambar/Media',
        'photo' => 'Foto',
        'logo' => 'Logo',
        'icon' => 'Ikon',
        'icon_type' => 'Tipe Ikon',
        'icon_file' => 'File Ikon',
        'status' => 'Status',
        'order_number' => 'Nomor Urut',
        'slug' => 'Slug (Tautan URL)',
        'price' => 'Harga',
        'category' => 'Kategori',
    ],
];
