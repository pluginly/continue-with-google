<?php

namespace ContinueWithGoogle\Database\Migrations;

use ContinueWithGoogle\WpMVC\Contracts\Migration;

class TestMigration implements Migration {
    public function more_than_version() {
        return '1.0.0';
    }

    public function execute(): bool {
        return true;
    }
}