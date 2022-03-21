<?php

namespace Slimak\Tests\Support;

use Slimak\CaseSensitiveSlug;
use Slimak\SluggedModel;

/**
 * Class TestModelCaseSensitive
 *
 * @package Slimak\Tests\Support
 */
class TestModelCaseSensitive extends SluggedModel
{
    use CaseSensitiveSlug;

    protected $table = 'test_models_case_sensitive';

    protected $guarded = [];

    public $timestamps = false;
}
