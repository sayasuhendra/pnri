<?php

return [
    'plugin' => [
        'name' => 'Blog',
        'description' => 'Sağlam blog platformu.'
    ],
    'blog' => [
        'menu_label' => 'Blog',
        'menu_description' => 'Gönderileri Yönet',
        'posts' => 'Gönderiler',
        'create_post' => 'blog gönderisi',
        'categories' => 'Kategoriler',
        'create_category' => 'blog kategorisi',
        'tab' => 'Blog',
        'access_posts' => 'Gönderileri yönet',
        'access_categories' => 'Blog kategorilerini yönet',
        'access_other_posts' => 'Diğer kullanıcıların gönderilerini yönet',
        'delete_confirm' => 'Emin misiniz?',
        'chart_published' => 'Yayınlandı',
        'chart_drafts' => 'Taslaklar',
        'chart_total' => 'Toplam'
    ],
    'posts' => [
        'list_title' => 'Blog gönderilerini yönet',
        'filter_category' => 'Kategori',
        'filter_published' => 'Yayınlananı gizle',
        'new_post' => 'Yeni gönderi'
    ],
    'post' => [
        'title' => 'Başlık',
        'title_placeholder' => 'Yeni gönderi başlığı',
        'slug' => 'Kısa URL',
        'slug_placeholder' => 'new-post-slug',
        'categories' => 'Kategoriler',
        'created' => 'Oluşturuldu',
        'updated' => 'Güncellendi',
        'published' => 'Yayınlandı',
        'published_validation' => 'Yayınlanan tarihi belirtiniz',
        'tab_edit' => 'Düzenle',
        'tab_categories' => 'Kategoriler',
        'categories_comment' => 'Gönderinin ait olduğu kategori',
        'categories_placeholder' => 'Kategori yok, öncelikle bir kategori oluşturmalısınız!',
        'tab_manage' => 'Yönet',
        'published_on' => 'Yayınlandı',
        'excerpt' => 'Alıntı',
        'featured_images' => 'Öne Çıkan Görseller',
        'delete_confirm' => 'Bu yazıyı silmek istiyor musunuz?',
        'close_confirm' => 'Gönderi kaydedilmedi.',
        'return_to_posts' => 'Gönderi listesine dön'
    ],
    'categories' => [
        'list_title' => 'Kategorileri yönet',
        'new_category' => 'Yeni kategori',
        'uncategorized' => 'Kategorisiz'
    ],
    'category' => [
        'name' => 'İsim',
        'name_placeholder' => 'NYeni kategori adı',
        'slug' => 'Kısa URL',
        'slug_placeholder' => 'new-category-slug',
        'posts' => 'Gönderiler',
        'delete_confirm' => 'Bu kategoriyi silmek istiyor musunuz?',
        'return_to_categories' => 'Kategori listesine dön'
    ],
    'settings' => [
        'category_title' => 'Kategori Listesi',
        'category_description' => 'Kategorilerin listesini sayfada göster.',
        'category_slug' => 'Kategori Kısa URL',
        'category_slug_description' => "Verilen kısa URLi kullanarak blog kategorisini görüntüle. Bu özellik şu anki aktif kategoriyi işaretlemek için varsayılan kısmi bileşeni tarafından  kullanılır",
        'category_display_empty' => 'Boş kategorileri göster',
        'category_display_empty_description' => 'Herhangi bir gönderi olmayan kategorileri göster.',
        'category_page' => 'Kategori sayfası',
        'category_page_description' => 'Kategori bağlantıları için kategori sayfası dosyasının adı. Bu özellik varsayılan kısmi bileşeni tarafından kullanılır.',
        'post_title' => 'Gönderi',
        'post_description' => 'Sayfada bir gönderi göster',
        'post_slug' => 'Gönderi Kısa URL',
        'post_slug_description' => "Verilen kısa URL ile gönderiye bakın.",
        'post_category' => 'Kategori sayfası',
        'post_category_description' => 'Kategori bağlantıları için kategori sayfası dosyasının adı. Bu özellik varsayılan kısmi bileşeni tarafından kullanılır.',
        'posts_title' => 'Gönderi listesi',
        'posts_description' => 'Son gönderilerin listesini göster.',
        'posts_pagination' => 'Sayfa numarası',
        'posts_pagination_description' => 'Bu değer kullanıcının hangi sayfada olduğunu belirlemek için kullanılır.',
        'posts_filter' => 'Kategori filtresi',
        'posts_filter_description' => 'Gönderileri filtrelemek için kategori kısa URLsi ya da URL parametresi girin. Tüm gönderiler için boş bırakın.',
        'posts_per_page' => 'Sayfa başına gönderi',
        'posts_per_page_validation' => 'Sayfa başına gönderi için geçersiz format',
        'posts_no_posts' => 'Gönderi mesajı yok',
        'posts_no_posts_description' => 'Eğer bir gönderi yoksa gönderi listesinde görüntülenecek mesaj. Bu özellik varsayılan kısmi bileşeni tarafından kullanılır.',
        'posts_order' => 'Gönderi Sırası',
        'posts_order_description' => 'Attribute on which the posts should be ordered',
        'posts_category' => 'Kategori sayfası',
        'posts_category_description' => 'Name of the category page file for the "Posted into" category links. Bu özellik varsayılan kısmi bileşeni tarafından kullanılır.',
        'posts_post' => 'Gönderi sayfası',
        'posts_post_description' => '"Daha fazla bilgi edinin" bağlantıları için gönderi sayfası dosyasının adı. Bu özellik varsayılan kısmi bileşeni tarafından kullanılır.'
    ]
];
