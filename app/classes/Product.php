<?php

namespace App\classes;
class Product
{
//    Property Starts Here
    private $name;
    private $price;
    private $quantity;
    private $category;
    private $brand;
    private $file;
    private $fileName;
    private $data;
    private $array;
    private $arrayOne;
    private $arrayTwo;
    private $imageFile;
    private $directory;
    private $imageName;
//    Property Ends Here


//    Method Starts Here
    public function __construct($data = null, $file = null)
    {
        if ($data && $file) {
            $this->name     = $data['name'];
            $this->price    = $data['price'];
            $this->quantity = $data['quantity'];
            $this->category = $data['category'];
            $this->brand    = $data['brand'];
            $this->imageFile= $file;
        }
    }

    public function index()
    {
        $this->imageName = $this->imageFile['image']['name'];
        $this->directory = '../assets/images/'.$this->imageName;
        move_uploaded_file($this->imageFile['image']['tmp_name'], $this->directory);


        $this->fileName = './db.txt';
        $this->file = fopen($this->fileName, 'a');
        $this->data = "$this->name, $this->price, $this->quantity, $this->category, $this->brand, $this->directory$";
        fwrite($this->file, $this->data);
        fclose($this->file);
        return 'Congrats! Data Save Successfully 🙌🏿';
    }

    public function getProductInfo()
    {
        $this->file     = './db.txt';
        $this->data     = file_get_contents($this->file);
        $this->array    = explode("$", $this->data);

        foreach ($this->array as $key => $item) {

           $this->arrayOne = explode(",", $item);
           if ($this->arrayOne[0])
           {
               $this->arrayTwo[$key] ['name'] = $this->arrayOne['0'];
               $this->arrayTwo[$key] ['price'] = $this->arrayOne['1'];
               $this->arrayTwo[$key] ['quantity'] = $this->arrayOne['2'];
               $this->arrayTwo[$key] ['category'] = $this->arrayOne['3'];
               $this->arrayTwo[$key] ['brand'] = $this->arrayOne['4'];
               $this->arrayTwo[$key] ['image'] = $this->arrayOne['5'];
           }
        }
        return $this->arrayTwo;
    }
//    Method Ends Here
}