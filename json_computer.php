<?php
header('Access-Control-Allow-Origin: *');
$computers = array(
    array(
        "name" => "MacBook Pro",
        "manufacturer" => "Apple Inc.",
        "processor" => "Apple M1 Pro/M1 Max",
        "graphics" => "Up to AMD Radeon Pro W6900X with 32GB of GDDR6 memory",
        "memory" => "Up to 64GB unified memory",
        "storage" => "Up to 8TB SSD",
        "display" => "16-inch Retina display with True Tone",
        "price" => "$1,999 to $6,099",
        "image" => "https://cdn4.iconfinder.com/data/icons/MacBook_Pro/512/leopard.png"
    ),

    array(
        "name" => "Dell XPS 13",
        "manufacturer" => "Dell Technologies Inc.",
        "processor" => "11th Gen Intel Core i3, i5, or i7",
        "graphics" => "Intel Iris Xe Graphics",
        "memory" => "Up to 16GB LPDDR4x RAM",
        "storage" => "Up to 2TB M.2 PCIe NVMe SSD",
        "display" => "13.4-inch FHD+ or UHD+ touch display",
        "price" => "$999 to $2,499",
        "image" => "https://benstore.com.ph/29898-home_default/dell-xps-13-9315-134-laptop-customize-to-order-intel-12th-gen-intel-iris-xe-.jpg"
    ),

    array(
        "name" => "HP Spectre x360",
        "manufacturer" => "HP Inc.",
        "processor" => "11th Gen Intel Core i5 or i7",
        "graphics" => "Intel Iris Xe Graphics",
        "memory" => "Up to 16GB LPDDR4x RAM",
        "storage" => "Up to 2TB PCIe NVMe M.2 SSD",
        "display" => "13.3-inch FHD or 4K UHD touch display",
        "price" => "$1,099 to $1,899",
        "image" => "https://ssl-product-images.www8-hp.com/digmedialib/prodimg/lowres/c08184765.png"
    ),

    array(
        "name" => "Lenovo ThinkPad X1 Carbon",
        "manufacturer" => "Lenovo Group Limited",
        "processor" => "11th Gen Intel Core i5 or i7",
        "graphics" => "Intel Iris Xe Graphics",
        "memory" => "Up to 16GB LPDDR4x RAM",
        "storage" => "Up to 2TB PCIe SSD",
        "display" => "14-inch FHD or 4K UHD display",
        "price" => "$1,553.40 to $2,717.40",
        "image" => "https://www.lenovo.com/medias/ASEAN-product-bundle-image-LEN101T0009-400x300-0227.png?context=bWFzdGVyfHJvb3R8OTM2MDl8aW1hZ2UvcG5nfGhhYS9oZWEvMTQ0MDcwMTU3MjcxMzQucG5nfDMwYjhjZjg0ZDU4NzljMmNjOWU3NTI4NzVlMmFmZDIyNThjY2FiMjRkZGRmNjE0NjYwNTEyODliOWU0NjQ5ZGI"
    ),

    array(
        "name" => "ASUS ROG Zephyrus G14",
        "manufacturer" => "ASUSTeK Computer Inc.",
        "processor" => "AMD Ryzen 9 5900HS",
        "graphics" => "NVIDIA GeForce RTX 3060 Max-Q",
        "memory" => "Up to 16GB DDR4 RAM",
        "storage" => "Up to 1TB M.2 NVMe PCIe 3.0 SSD",
        "display" => "14-inch FHD IPS display with 120Hz refresh rate",
        "price" => "$1,699.99 to $2,199.99",
        "image" => "https://dlcdnwebimgs.asus.com/gain/A1433BAB-3BC8-40BF-965C-B3E95E59BC61/w1000/h732"
    ),
    
    array(
        "name" => "Xitrix",
        "manufacturer" => "Xitrix Computer Corporation",
        "processor" => "Intel Core i5-1235U Processor 12M Cache,up to 4.40GHz",
        "graphics" => "Intel Iris Xe Graphics",
        "memory" => "8GB DDR4-3200MHz SODIUM Memory",
        "storage" => "512GB NVME M.2 SSD",
        "display" => "15.6 35.62cm FHD 1929x1080 16;9 panel,3.2mm",
        "price" => "$2,099 to $2,599",
        "image" => "https://static.vecteezy.com/system/resources/previews/008/475/692/original/modern-laptop-isolated-on-white-background-3d-illustration-free-png.png"
    ),
);

echo json_encode(array("computers" => $computers));
?>