<?php

namespace ContinueWithGoogle\App\Models;

use ContinueWithGoogle\WpMVC\App;
use ContinueWithGoogle\WpMVC\Database\Eloquent\Model;
use ContinueWithGoogle\WpMVC\Database\Eloquent\Relations\HasMany;
use ContinueWithGoogle\WpMVC\Database\Resolver;

class Post extends Model {
    public static function get_table_name():string {
        return 'posts';
    }

    public function meta(): HasMany {
        return $this->has_many( PostMeta::class, 'post_id', 'ID' );
    }

    public function resolver():Resolver {
        return App::$container->get( Resolver::class );
    }
}