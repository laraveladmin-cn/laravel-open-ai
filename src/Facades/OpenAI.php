<?php

declare(strict_types=1);

namespace LaravelAdmin\LaravelOpenAi\Facades;

use Illuminate\Support\Facades\Facade;
/**
 * @method static  chat()
 * @method static  getCURLInfo()
 * @method static  listModels()
 * @method static  retrieveModel()
 * @method static  complete()
 * @method static  completion()
 * @method static  createEdit()
 * @method static  image()
 * @method static  imageEdit()
 * @method static  createImageVariation()
 * @method static  search()
 * @method static  answer()
 * @method static  classification()
 * @method static  moderation()
 * @method static  transcribe()
 * @method static  translate()
 * @method static  uploadFile()
 * @method static  listFiles()
 * @method static  retrieveFile()
 * @method static  retrieveFileContent()
 * @method static  deleteFile()
 * @method static  createFineTune()
 * @method static  listFineTunes()
 * @method static  retrieveFineTune()
 * @method static  cancelFineTune()
 * @method static  listFineTuneEvents()
 * @method static  deleteFineTune()
 * @method static  engines()
 * @method static  engine()
 * @method static  embeddings()
 * @method static  setTimeout()
 * @method static  setProxy()
 * @method static  setCustomURL()
 * @method static  setBaseURL()
 * @method static  setHeader()
 * @method static  setORG()
 */
class OpenAI extends Facade
{
    /**
     * Get the registered name of the component.
     */
    protected static function getFacadeAccessor(): string
    {
        return 'openai';
    }
}
