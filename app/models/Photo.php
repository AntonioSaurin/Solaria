<?php

namespace app\models;

class Photo extends Model
{
    protected $table = "photo";

    public function catchPhoto($image)
    {
        $image = $_FILES['image'];
        $name = $image['name'];
        $size = $image['size'];
        $archive = $image['tmp_name'];
        $extension = explode('.', $name);
        $newName = 'u' . $_SESSION['id'] . 'p' . time() . '.' . $extension[1];
        $path = 'app/uploads/' . $newName;

        var_dump([
            'photoName' => $name,
            'photoFormat' => $extension[1],
            'photoSize' => $size,
            'photoPath' => $path,
            'photoType' => 'profile'
        ]);

        move_uploaded_file($archive, $path);

        $insertAction = $this->insert([
            'photoName' => $name,
            'photoFormat' => $extension[1],
            'photoSize' => $size,
            'photoPath' => $path,
            'photoType' => 'profile'
        ]);

        var_dump($insertAction);

    }

}