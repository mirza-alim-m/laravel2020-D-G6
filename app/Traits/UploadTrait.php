<?php

namespace App\Traits;

use Illuminate\Support\Str;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

/**
 *
 */
trait UploadTrait
{
  protected $uploadFotoLocation = 'public/images';
  protected $uploadFileLocation = 'public/files';

  public function uploadFoto($photo= null)
  {
    // request()->validate($this->);
  }
}
