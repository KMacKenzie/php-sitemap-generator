<?php

namespace Icamys\SitemapGenerator;

class FileSystem implements FileSystemInterface
{
    public function fopen($filepath, $mode)
    {
        return fopen($filepath, $mode);
    }

    public function fclose($filepath)
    {
        return fclose($filepath);
    }

    public function fputcsv($handle, $fields)
    {
        return fputcsv($handle, $fields);
    }

    public function fgetcsv($handle)
    {
        return fgetcsv($handle);
    }

    public function rewind($handle)
    {
        return rewind($handle);
    }

    public function file_get_contents($filepath)
    {
        return file_get_contents($filepath);
    }

    public function file_put_contents($filepath, $content)
    {
        return file_put_contents($filepath, $content);
    }

    public function gzopen($filepath, $mode)
    {
        return gzopen($filepath, $mode);
    }

    public function gzwrite($file, $content)
    {
        return gzwrite($file, $content);
    }

    public function gzclose($file)
    {
        return gzclose($file);
    }

    public function file_exists($filepath)
    {
        return file_exists($filepath);
    }
}