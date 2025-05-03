<?php

namespace ContinueWithGoogle\App\Models;

use ContinueWithGoogle\WpMVC\App;
use ContinueWithGoogle\WpMVC\Database\Eloquent\Model;
use ContinueWithGoogle\WpMVC\Database\Resolver;

class PostMeta extends Model {
    public static function get_table_name():string {
        return 'postmeta';
    }

    public function resolver():Resolver {
        return App::$container->get( Resolver::class );
    }
}