<?php

class Product_Controller extends Base_Controller
{
    function __construct()
    {
        parent::__construct();
        // $this->model->loader_model("Product");
    }

    function index()
    {
        // $result = $this->model->Product->getAll();
        // $this->view->loader_view("Product/list", ["products" => $result]);
        $this->layout->setlayout("detail_Pro");

    }
    function tatcasp(){
        $this->layout->setLayout("layout_danhmuc");
        $this->view->loader_view("Sanpham/tatcasp");
    }
    function chitiet_sp(){
        $this->view->loader_view("Sanpham/chitiet_sp");
    }
    function thanhtoan(){
        $this->view->loader_view("Sanpham/thanhtoan");
    }

    function getadd()
    {
        $this->view->loader_view("Product/add");
    }

    function postadd()
    {
        $name = $_POST["name"];
        $price = $_POST["price"];
        $this->model->Product->insert($name, $price);
    }

    function delete()
    {
        $id = $_GET["id"];
        $this->model->Product->deleteById($id);
    }

    function getedit()
    {
        $id = $_GET["id"];

        $product_detail = $this->model->Product->findById($id);

        $this->view->loader_view("Product/edit", ["product" => $product_detail]);
    }

    function postedit()
    {
        if (!isset($_POST["sua"])) {
            exit("Lỗi");
        }

        $id = $_GET["id"];
        $name = $_POST["name"];
        $price = $_POST["price"];

        $this->model->Product->editById($id, $name, $price);
    }
}