# Project: Product Service

## End-point: List Product
Endpoint untuk mendapatkan data seluruh produk yang ada
### Method: GET
>```
>{{product_url}}/api/products
>```
### Response: 200
```json
{
    "status": "Success",
    "message": "List of Products",
    "data": [
        {
            "product_id": 1,
            "product_name": "Ryzen 5 5600",
            "brand": "AMD",
            "chategory": "Processor",
            "price": 2050000,
            "stock": 15,
            "created_at": "2025-04-25T15:13:21.000000Z",
            "updated_at": "2025-04-25T15:13:21.000000Z"
        },
        {
            "product_id": 2,
            "product_name": "Ryzen 7 5800X",
            "brand": "AMD",
            "chategory": "Processor",
            "price": 3400000,
            "stock": 10,
            "created_at": "2025-04-25T15:13:21.000000Z",
            "updated_at": "2025-04-25T15:13:21.000000Z"
        },
        {
            "product_id": 3,
            "product_name": "Ryzen 9 5900X",
            "brand": "AMD",
            "chategory": "Processor",
            "price": 5200000,
            "stock": 17,
            "created_at": "2025-04-25T15:13:21.000000Z",
            "updated_at": "2025-04-25T15:13:21.000000Z"
        },
        {
            "product_id": 4,
            "product_name": "Ryzen 5 7600",
            "brand": "AMD",
            "chategory": "Processor",
            "price": 3100000,
            "stock": 18,
            "created_at": "2025-04-25T15:13:21.000000Z",
            "updated_at": "2025-04-25T15:13:21.000000Z"
        },
        {
            "product_id": 5,
            "product_name": "Core i3-12100F",
            "brand": "Intel",
            "chategory": "Processor",
            "price": 1600000,
            "stock": 10,
            "created_at": "2025-04-25T15:13:21.000000Z",
            "updated_at": "2025-04-25T15:13:21.000000Z"
        },
        {
            "product_id": 6,
            "product_name": "Core i5-12400F",
            "brand": "Intel",
            "chategory": "Processor",
            "price": 2500000,
            "stock": 12,
            "created_at": "2025-04-25T15:13:21.000000Z",
            "updated_at": "2025-04-25T15:13:21.000000Z"
        },
        {
            "product_id": 7,
            "product_name": "Core i7-12700K",
            "brand": "Intel",
            "chategory": "Processor",
            "price": 4700000,
            "stock": 14,
            "created_at": "2025-04-25T15:13:21.000000Z",
            "updated_at": "2025-04-25T15:13:21.000000Z"
        },
        {
            "product_id": 8,
            "product_name": "Core i9-12900K",
            "brand": "Intel",
            "chategory": "Processor",
            "price": 6500000,
            "stock": 10,
            "created_at": "2025-04-25T15:13:21.000000Z",
            "updated_at": "2025-04-25T15:13:21.000000Z"
        },
        {
            "product_id": 9,
            "product_name": "Ryzen 5 5500",
            "brand": "AMD",
            "chategory": "Processor",
            "price": 1700000,
            "stock": 13,
            "created_at": "2025-04-25T15:13:21.000000Z",
            "updated_at": "2025-04-25T15:13:21.000000Z"
        },
        {
            "product_id": 10,
            "product_name": "Core i5-13400F",
            "brand": "Intel",
            "chategory": "Processor",
            "price": 3200000,
            "stock": 8,
            "created_at": "2025-04-25T15:13:21.000000Z",
            "updated_at": "2025-04-25T15:13:21.000000Z"
        },
        {
            "product_id": 11,
            "product_name": "Corsair Vengeance 16GB DDR4",
            "brand": "Corsair",
            "chategory": "RAM",
            "price": 900000,
            "stock": 7,
            "created_at": "2025-04-25T15:13:21.000000Z",
            "updated_at": "2025-04-25T15:13:21.000000Z"
        },
        {
            "product_id": 12,
            "product_name": "Corsair Vengeance 32GB DDR4",
            "brand": "Corsair",
            "chategory": "RAM",
            "price": 1600000,
            "stock": 19,
            "created_at": "2025-04-25T15:13:21.000000Z",
            "updated_at": "2025-04-25T15:13:21.000000Z"
        },
        {
            "product_id": 13,
            "product_name": "Kingston Fury 16GB DDR4",
            "brand": "Kingston",
            "chategory": "RAM",
            "price": 870000,
            "stock": 17,
            "created_at": "2025-04-25T15:13:21.000000Z",
            "updated_at": "2025-04-25T15:13:21.000000Z"
        },
        {
            "product_id": 14,
            "product_name": "Kingston Fury 32GB DDR4",
            "brand": "Kingston",
            "chategory": "RAM",
            "price": 1550000,
            "stock": 12,
            "created_at": "2025-04-25T15:13:21.000000Z",
            "updated_at": "2025-04-25T15:13:21.000000Z"
        },
        {
            "product_id": 15,
            "product_name": "Team T-Force Delta 16GB RGB",
            "brand": "TeamGroup",
            "chategory": "RAM",
            "price": 890000,
            "stock": 13,
            "created_at": "2025-04-25T15:13:21.000000Z",
            "updated_at": "2025-04-25T15:13:21.000000Z"
        },
        {
            "product_id": 16,
            "product_name": "G.Skill Ripjaws 16GB DDR4",
            "brand": "G.Skill",
            "chategory": "RAM",
            "price": 860000,
            "stock": 8,
            "created_at": "2025-04-25T15:13:21.000000Z",
            "updated_at": "2025-04-25T15:13:21.000000Z"
        },
        {
            "product_id": 17,
            "product_name": "Patriot Viper 16GB",
            "brand": "Patriot",
            "chategory": "RAM",
            "price": 850000,
            "stock": 19,
            "created_at": "2025-04-25T15:13:21.000000Z",
            "updated_at": "2025-04-25T15:13:21.000000Z"
        },
        {
            "product_id": 18,
            "product_name": "ADATA XPG 16GB RGB",
            "brand": "ADATA",
            "chategory": "RAM",
            "price": 880000,
            "stock": 7,
            "created_at": "2025-04-25T15:13:21.000000Z",
            "updated_at": "2025-04-25T15:13:21.000000Z"
        },
        {
            "product_id": 19,
            "product_name": "Lexar 16GB DDR4",
            "brand": "Lexar",
            "chategory": "RAM",
            "price": 830000,
            "stock": 11,
            "created_at": "2025-04-25T15:13:21.000000Z",
            "updated_at": "2025-04-25T15:13:21.000000Z"
        },
        {
            "product_id": 20,
            "product_name": "Silicon Power 16GB",
            "brand": "Silicon Power",
            "chategory": "RAM",
            "price": 820000,
            "stock": 14,
            "created_at": "2025-04-25T15:13:21.000000Z",
            "updated_at": "2025-04-25T15:13:21.000000Z"
        },
        {
            "product_id": 21,
            "product_name": "Samsung 970 Evo Plus 500GB",
            "brand": "Samsung",
            "chategory": "SSD",
            "price": 1050000,
            "stock": 12,
            "created_at": "2025-04-25T15:13:21.000000Z",
            "updated_at": "2025-04-25T15:13:21.000000Z"
        },
        {
            "product_id": 22,
            "product_name": "WD Blue SN570 500GB",
            "brand": "Western Digital",
            "chategory": "SSD",
            "price": 880000,
            "stock": 11,
            "created_at": "2025-04-25T15:13:21.000000Z",
            "updated_at": "2025-04-25T15:13:21.000000Z"
        },
        {
            "product_id": 23,
            "product_name": "Kingston NV2 1TB",
            "brand": "Kingston",
            "chategory": "SSD",
            "price": 1250000,
            "stock": 9,
            "created_at": "2025-04-25T15:13:21.000000Z",
            "updated_at": "2025-04-25T15:13:21.000000Z"
        },
        {
            "product_id": 24,
            "product_name": "Crucial P3 1TB",
            "brand": "Crucial",
            "chategory": "SSD",
            "price": 1150000,
            "stock": 17,
            "created_at": "2025-04-25T15:13:21.000000Z",
            "updated_at": "2025-04-25T15:13:21.000000Z"
        },
        {
            "product_id": 25,
            "product_name": "ADATA XPG SX8200 Pro 1TB",
            "brand": "ADATA",
            "chategory": "SSD",
            "price": 1350000,
            "stock": 10,
            "created_at": "2025-04-25T15:13:21.000000Z",
            "updated_at": "2025-04-25T15:13:21.000000Z"
        },
        {
            "product_id": 26,
            "product_name": "Lexar NM620 512GB",
            "brand": "Lexar",
            "chategory": "SSD",
            "price": 950000,
            "stock": 10,
            "created_at": "2025-04-25T15:13:21.000000Z",
            "updated_at": "2025-04-25T15:13:21.000000Z"
        },
        {
            "product_id": 27,
            "product_name": "PNY CS1030 1TB",
            "brand": "PNY",
            "chategory": "SSD",
            "price": 1100000,
            "stock": 8,
            "created_at": "2025-04-25T15:13:21.000000Z",
            "updated_at": "2025-04-25T15:13:21.000000Z"
        },
        {
            "product_id": 28,
            "product_name": "Samsung 980 Pro 500GB",
            "brand": "Samsung",
            "chategory": "SSD",
            "price": 1300000,
            "stock": 7,
            "created_at": "2025-04-25T15:13:21.000000Z",
            "updated_at": "2025-04-25T15:13:21.000000Z"
        },
        {
            "product_id": 29,
            "product_name": "Kingston KC3000 1TB",
            "brand": "Kingston",
            "chategory": "SSD",
            "price": 1450000,
            "stock": 6,
            "created_at": "2025-04-25T15:13:21.000000Z",
            "updated_at": "2025-04-25T15:13:21.000000Z"
        },
        {
            "product_id": 30,
            "product_name": "WD Black SN770 1TB",
            "brand": "Western Digital",
            "chategory": "SSD",
            "price": 1400000,
            "stock": 15,
            "created_at": "2025-04-25T15:13:21.000000Z",
            "updated_at": "2025-04-25T15:13:21.000000Z"
        },
        {
            "product_id": 31,
            "product_name": "Seagate Barracuda 1TB",
            "brand": "Seagate",
            "chategory": "HDD",
            "price": 600000,
            "stock": 16,
            "created_at": "2025-04-25T15:13:21.000000Z",
            "updated_at": "2025-04-25T15:13:21.000000Z"
        },
        {
            "product_id": 32,
            "product_name": "Seagate Barracuda 2TB",
            "brand": "Seagate",
            "chategory": "HDD",
            "price": 850000,
            "stock": 13,
            "created_at": "2025-04-25T15:13:21.000000Z",
            "updated_at": "2025-04-25T15:13:21.000000Z"
        },
        {
            "product_id": 33,
            "product_name": "WD Blue 1TB",
            "brand": "Western Digital",
            "chategory": "HDD",
            "price": 610000,
            "stock": 12,
            "created_at": "2025-04-25T15:13:21.000000Z",
            "updated_at": "2025-04-25T15:13:21.000000Z"
        },
        {
            "product_id": 34,
            "product_name": "WD Blue 2TB",
            "brand": "Western Digital",
            "chategory": "HDD",
            "price": 870000,
            "stock": 20,
            "created_at": "2025-04-25T15:13:21.000000Z",
            "updated_at": "2025-04-25T15:13:21.000000Z"
        },
        {
            "product_id": 35,
            "product_name": "Toshiba P300 1TB",
            "brand": "Toshiba",
            "chategory": "HDD",
            "price": 590000,
            "stock": 12,
            "created_at": "2025-04-25T15:13:21.000000Z",
            "updated_at": "2025-04-25T15:13:21.000000Z"
        },
        {
            "product_id": 36,
            "product_name": "Toshiba P300 2TB",
            "brand": "Toshiba",
            "chategory": "HDD",
            "price": 880000,
            "stock": 12,
            "created_at": "2025-04-25T15:13:21.000000Z",
            "updated_at": "2025-04-25T15:13:21.000000Z"
        },
        {
            "product_id": 37,
            "product_name": "WD Black 1TB",
            "brand": "Western Digital",
            "chategory": "HDD",
            "price": 700000,
            "stock": 20,
            "created_at": "2025-04-25T15:13:21.000000Z",
            "updated_at": "2025-04-25T15:13:21.000000Z"
        },
        {
            "product_id": 38,
            "product_name": "Seagate FireCuda 1TB",
            "brand": "Seagate",
            "chategory": "HDD",
            "price": 930000,
            "stock": 14,
            "created_at": "2025-04-25T15:13:21.000000Z",
            "updated_at": "2025-04-25T15:13:21.000000Z"
        },
        {
            "product_id": 39,
            "product_name": "Hitachi 1TB",
            "brand": "Hitachi",
            "chategory": "HDD",
            "price": 580000,
            "stock": 11,
            "created_at": "2025-04-25T15:13:21.000000Z",
            "updated_at": "2025-04-25T15:13:21.000000Z"
        },
        {
            "product_id": 40,
            "product_name": "HGST 1TB",
            "brand": "HGST",
            "chategory": "HDD",
            "price": 570000,
            "stock": 7,
            "created_at": "2025-04-25T15:13:21.000000Z",
            "updated_at": "2025-04-25T15:13:21.000000Z"
        },
        {
            "product_id": 41,
            "product_name": "ASUS TUF B550M-Plus",
            "brand": "ASUS",
            "chategory": "Motherboard",
            "price": 1800000,
            "stock": 20,
            "created_at": "2025-04-25T15:13:21.000000Z",
            "updated_at": "2025-04-25T15:13:21.000000Z"
        },
        {
            "product_id": 42,
            "product_name": "MSI B550 Tomahawk",
            "brand": "MSI",
            "chategory": "Motherboard",
            "price": 2200000,
            "stock": 17,
            "created_at": "2025-04-25T15:13:21.000000Z",
            "updated_at": "2025-04-25T15:13:21.000000Z"
        },
        {
            "product_id": 43,
            "product_name": "Gigabyte B660M DS3H",
            "brand": "Gigabyte",
            "chategory": "Motherboard",
            "price": 1700000,
            "stock": 17,
            "created_at": "2025-04-25T15:13:21.000000Z",
            "updated_at": "2025-04-25T15:13:21.000000Z"
        },
        {
            "product_id": 44,
            "product_name": "ASRock B550M Steel Legend",
            "brand": "ASRock",
            "chategory": "Motherboard",
            "price": 1900000,
            "stock": 5,
            "created_at": "2025-04-25T15:13:21.000000Z",
            "updated_at": "2025-04-25T15:13:21.000000Z"
        },
        {
            "product_id": 45,
            "product_name": "ASUS Prime B450M-A",
            "brand": "ASUS",
            "chategory": "Motherboard",
            "price": 1400000,
            "stock": 17,
            "created_at": "2025-04-25T15:13:21.000000Z",
            "updated_at": "2025-04-25T15:13:21.000000Z"
        },
        {
            "product_id": 46,
            "product_name": "MSI MAG B660M Mortar",
            "brand": "MSI",
            "chategory": "Motherboard",
            "price": 2300000,
            "stock": 16,
            "created_at": "2025-04-25T15:13:21.000000Z",
            "updated_at": "2025-04-25T15:13:21.000000Z"
        },
        {
            "product_id": 47,
            "product_name": "Gigabyte B550 Gaming X",
            "brand": "Gigabyte",
            "chategory": "Motherboard",
            "price": 1750000,
            "stock": 7,
            "created_at": "2025-04-25T15:13:21.000000Z",
            "updated_at": "2025-04-25T15:13:21.000000Z"
        },
        {
            "product_id": 48,
            "product_name": "ASRock B660 Pro RS",
            "brand": "ASRock",
            "chategory": "Motherboard",
            "price": 2100000,
            "stock": 12,
            "created_at": "2025-04-25T15:13:21.000000Z",
            "updated_at": "2025-04-25T15:13:21.000000Z"
        },
        {
            "product_id": 49,
            "product_name": "ASUS ROG Strix B550-F",
            "brand": "ASUS",
            "chategory": "Motherboard",
            "price": 2400000,
            "stock": 6,
            "created_at": "2025-04-25T15:13:21.000000Z",
            "updated_at": "2025-04-25T15:13:21.000000Z"
        },
        {
            "product_id": 50,
            "product_name": "Gigabyte Z690 UD DDR4",
            "brand": "Gigabyte",
            "chategory": "Motherboard",
            "price": 2800000,
            "stock": 20,
            "created_at": "2025-04-25T15:13:21.000000Z",
            "updated_at": "2025-04-25T15:13:21.000000Z"
        },
        {
            "product_id": 51,
            "product_name": "RTX 3060 12GB",
            "brand": "NVIDIA",
            "chategory": "GPU",
            "price": 4800000,
            "stock": 20,
            "created_at": "2025-04-25T15:13:21.000000Z",
            "updated_at": "2025-04-25T15:13:21.000000Z"
        },
        {
            "product_id": 52,
            "product_name": "RTX 4060 Ti 8GB",
            "brand": "MSI",
            "chategory": "GPU",
            "price": 5800000,
            "stock": 9,
            "created_at": "2025-04-25T15:13:21.000000Z",
            "updated_at": "2025-04-25T15:13:21.000000Z"
        },
        {
            "product_id": 53,
            "product_name": "RX 7600 8GB",
            "brand": "AMD",
            "chategory": "GPU",
            "price": 5000000,
            "stock": 7,
            "created_at": "2025-04-25T15:13:21.000000Z",
            "updated_at": "2025-04-25T15:13:21.000000Z"
        },
        {
            "product_id": 54,
            "product_name": "RTX 3070 8GB",
            "brand": "Zotac",
            "chategory": "GPU",
            "price": 6900000,
            "stock": 6,
            "created_at": "2025-04-25T15:13:21.000000Z",
            "updated_at": "2025-04-25T15:13:21.000000Z"
        },
        {
            "product_id": 55,
            "product_name": "RTX 4070 12GB",
            "brand": "Gigabyte",
            "chategory": "GPU",
            "price": 8100000,
            "stock": 13,
            "created_at": "2025-04-25T15:13:21.000000Z",
            "updated_at": "2025-04-25T15:13:21.000000Z"
        },
        {
            "product_id": 56,
            "product_name": "RX 6750 XT 12GB",
            "brand": "Sapphire",
            "chategory": "GPU",
            "price": 6300000,
            "stock": 6,
            "created_at": "2025-04-25T15:13:21.000000Z",
            "updated_at": "2025-04-25T15:13:21.000000Z"
        },
        {
            "product_id": 57,
            "product_name": "RTX 2060 6GB",
            "brand": "ASUS",
            "chategory": "GPU",
            "price": 4200000,
            "stock": 9,
            "created_at": "2025-04-25T15:13:21.000000Z",
            "updated_at": "2025-04-25T15:13:21.000000Z"
        },
        {
            "product_id": 58,
            "product_name": "GTX 1660 Super",
            "brand": "MSI",
            "chategory": "GPU",
            "price": 3600000,
            "stock": 7,
            "created_at": "2025-04-25T15:13:21.000000Z",
            "updated_at": "2025-04-25T15:13:21.000000Z"
        },
        {
            "product_id": 59,
            "product_name": "RTX 4080 16GB",
            "brand": "ASUS",
            "chategory": "GPU",
            "price": 16500000,
            "stock": 15,
            "created_at": "2025-04-25T15:13:21.000000Z",
            "updated_at": "2025-04-25T15:13:21.000000Z"
        },
        {
            "product_id": 60,
            "product_name": "RX 7800 XT 16GB",
            "brand": "PowerColor",
            "chategory": "GPU",
            "price": 8500000,
            "stock": 11,
            "created_at": "2025-04-25T15:13:21.000000Z",
            "updated_at": "2025-04-25T15:13:21.000000Z"
        },
        {
            "product_id": 61,
            "product_name": "Corsair CV550 550W 80+ Bronze",
            "brand": "Corsair",
            "chategory": "PSU",
            "price": 750000,
            "stock": 17,
            "created_at": "2025-04-25T15:13:21.000000Z",
            "updated_at": "2025-04-25T15:13:21.000000Z"
        },
        {
            "product_id": 62,
            "product_name": "Seasonic S12III 550W",
            "brand": "Seasonic",
            "chategory": "PSU",
            "price": 800000,
            "stock": 17,
            "created_at": "2025-04-25T15:13:21.000000Z",
            "updated_at": "2025-04-25T15:13:21.000000Z"
        },
        {
            "product_id": 63,
            "product_name": "Cooler Master MWE 650W",
            "brand": "Cooler Master",
            "chategory": "PSU",
            "price": 850000,
            "stock": 14,
            "created_at": "2025-04-25T15:13:21.000000Z",
            "updated_at": "2025-04-25T15:13:21.000000Z"
        },
        {
            "product_id": 64,
            "product_name": "FSP Hydro K Pro 600W",
            "brand": "FSP",
            "chategory": "PSU",
            "price": 790000,
            "stock": 7,
            "created_at": "2025-04-25T15:13:21.000000Z",
            "updated_at": "2025-04-25T15:13:21.000000Z"
        },
        {
            "product_id": 65,
            "product_name": "Antec Atom B550 550W",
            "brand": "Antec",
            "chategory": "PSU",
            "price": 720000,
            "stock": 12,
            "created_at": "2025-04-25T15:13:21.000000Z",
            "updated_at": "2025-04-25T15:13:21.000000Z"
        },
        {
            "product_id": 66,
            "product_name": "Thermaltake Litepower 550W",
            "brand": "Thermaltake",
            "chategory": "PSU",
            "price": 760000,
            "stock": 14,
            "created_at": "2025-04-25T15:13:21.000000Z",
            "updated_at": "2025-04-25T15:13:21.000000Z"
        },
        {
            "product_id": 67,
            "product_name": "Corsair RM650x 650W Gold",
            "brand": "Corsair",
            "chategory": "PSU",
            "price": 1200000,
            "stock": 11,
            "created_at": "2025-04-25T15:13:21.000000Z",
            "updated_at": "2025-04-25T15:13:21.000000Z"
        },
        {
            "product_id": 68,
            "product_name": "Seasonic Focus GX-750 750W",
            "brand": "Seasonic",
            "chategory": "PSU",
            "price": 1450000,
            "stock": 19,
            "created_at": "2025-04-25T15:13:21.000000Z",
            "updated_at": "2025-04-25T15:13:21.000000Z"
        },
        {
            "product_id": 69,
            "product_name": "Cooler Master GX 650W Gold",
            "brand": "Cooler Master",
            "chategory": "PSU",
            "price": 1300000,
            "stock": 6,
            "created_at": "2025-04-25T15:13:21.000000Z",
            "updated_at": "2025-04-25T15:13:21.000000Z"
        },
        {
            "product_id": 70,
            "product_name": "ASUS TUF Gaming 750W Bronze",
            "brand": "ASUS",
            "chategory": "PSU",
            "price": 1150000,
            "stock": 19,
            "created_at": "2025-04-25T15:13:21.000000Z",
            "updated_at": "2025-04-25T15:13:21.000000Z"
        },
        {
            "product_id": 71,
            "product_name": "NZXT H510 White",
            "brand": "NZXT",
            "chategory": "Casing",
            "price": 1200000,
            "stock": 7,
            "created_at": "2025-04-25T15:13:21.000000Z",
            "updated_at": "2025-04-25T15:13:21.000000Z"
        },
        {
            "product_id": 72,
            "product_name": "Lian Li LANCOOL 215",
            "brand": "Lian Li",
            "chategory": "Casing",
            "price": 1100000,
            "stock": 18,
            "created_at": "2025-04-25T15:13:21.000000Z",
            "updated_at": "2025-04-25T15:13:21.000000Z"
        },
        {
            "product_id": 73,
            "product_name": "Armaggeddon T3X",
            "brand": "Armaggeddon",
            "chategory": "Casing",
            "price": 700000,
            "stock": 7,
            "created_at": "2025-04-25T15:13:21.000000Z",
            "updated_at": "2025-04-25T15:13:21.000000Z"
        },
        {
            "product_id": 74,
            "product_name": "Corsair 4000D Airflow",
            "brand": "Corsair",
            "chategory": "Casing",
            "price": 1300000,
            "stock": 20,
            "created_at": "2025-04-25T15:13:21.000000Z",
            "updated_at": "2025-04-25T15:13:21.000000Z"
        },
        {
            "product_id": 75,
            "product_name": "Cooler Master NR400",
            "brand": "Cooler Master",
            "chategory": "Casing",
            "price": 950000,
            "stock": 19,
            "created_at": "2025-04-25T15:13:21.000000Z",
            "updated_at": "2025-04-25T15:13:21.000000Z"
        },
        {
            "product_id": 76,
            "product_name": "Montech Air 100",
            "brand": "Montech",
            "chategory": "Casing",
            "price": 850000,
            "stock": 17,
            "created_at": "2025-04-25T15:13:21.000000Z",
            "updated_at": "2025-04-25T15:13:21.000000Z"
        },
        {
            "product_id": 77,
            "product_name": "Fantech CG71",
            "brand": "Fantech",
            "chategory": "Casing",
            "price": 780000,
            "stock": 10,
            "created_at": "2025-04-25T15:13:21.000000Z",
            "updated_at": "2025-04-25T15:13:21.000000Z"
        },
        {
            "product_id": 78,
            "product_name": "Digital Alliance N10",
            "brand": "DA",
            "chategory": "Casing",
            "price": 820000,
            "stock": 19,
            "created_at": "2025-04-25T15:13:21.000000Z",
            "updated_at": "2025-04-25T15:13:21.000000Z"
        },
        {
            "product_id": 79,
            "product_name": "Thermaltake Versa H18",
            "brand": "Thermaltake",
            "chategory": "Casing",
            "price": 900000,
            "stock": 18,
            "created_at": "2025-04-25T15:13:21.000000Z",
            "updated_at": "2025-04-25T15:13:21.000000Z"
        },
        {
            "product_id": 80,
            "product_name": "InWin 101C",
            "brand": "InWin",
            "chategory": "Casing",
            "price": 1000000,
            "stock": 10,
            "created_at": "2025-04-25T15:13:21.000000Z",
            "updated_at": "2025-04-25T15:13:21.000000Z"
        },
        {
            "product_id": 81,
            "product_name": "Cooler Master Hyper 212 Black",
            "brand": "Cooler Master",
            "chategory": "Air Cooler",
            "price": 500000,
            "stock": 14,
            "created_at": "2025-04-25T15:13:21.000000Z",
            "updated_at": "2025-04-25T15:13:21.000000Z"
        },
        {
            "product_id": 82,
            "product_name": "Noctua NH-U12S Redux",
            "brand": "Noctua",
            "chategory": "Air Cooler",
            "price": 850000,
            "stock": 15,
            "created_at": "2025-04-25T15:13:21.000000Z",
            "updated_at": "2025-04-25T15:13:21.000000Z"
        },
        {
            "product_id": 83,
            "product_name": "DeepCool GAMMAXX 400 V2",
            "brand": "DeepCool",
            "chategory": "Air Cooler",
            "price": 450000,
            "stock": 11,
            "created_at": "2025-04-25T15:13:21.000000Z",
            "updated_at": "2025-04-25T15:13:21.000000Z"
        },
        {
            "product_id": 84,
            "product_name": "Thermaltake UX100 ARGB",
            "brand": "Thermaltake",
            "chategory": "Air Cooler",
            "price": 400000,
            "stock": 17,
            "created_at": "2025-04-25T15:13:21.000000Z",
            "updated_at": "2025-04-25T15:13:21.000000Z"
        },
        {
            "product_id": 85,
            "product_name": "ID-Cooling SE-224-XT",
            "brand": "ID-Cooling",
            "chategory": "Air Cooler",
            "price": 430000,
            "stock": 16,
            "created_at": "2025-04-25T15:13:21.000000Z",
            "updated_at": "2025-04-25T15:13:21.000000Z"
        },
        {
            "product_id": 86,
            "product_name": "Vetroo V5",
            "brand": "Vetroo",
            "chategory": "Air Cooler",
            "price": 470000,
            "stock": 14,
            "created_at": "2025-04-25T15:13:21.000000Z",
            "updated_at": "2025-04-25T15:13:21.000000Z"
        },
        {
            "product_id": 87,
            "product_name": "Be Quiet! Pure Rock 2",
            "brand": "Be Quiet!",
            "chategory": "Air Cooler",
            "price": 900000,
            "stock": 12,
            "created_at": "2025-04-25T15:13:21.000000Z",
            "updated_at": "2025-04-25T15:13:21.000000Z"
        },
        {
            "product_id": 88,
            "product_name": "Scythe Fuma 2 Rev B",
            "brand": "Scythe",
            "chategory": "Air Cooler",
            "price": 950000,
            "stock": 14,
            "created_at": "2025-04-25T15:13:21.000000Z",
            "updated_at": "2025-04-25T15:13:21.000000Z"
        },
        {
            "product_id": 89,
            "product_name": "SilverStone Hydrogon D120",
            "brand": "SilverStone",
            "chategory": "Air Cooler",
            "price": 880000,
            "stock": 11,
            "created_at": "2025-04-25T15:13:21.000000Z",
            "updated_at": "2025-04-25T15:13:21.000000Z"
        },
        {
            "product_id": 90,
            "product_name": "ARCTIC Freezer 34 eSports Duo",
            "brand": "ARCTIC",
            "chategory": "Air Cooler",
            "price": 890000,
            "stock": 6,
            "created_at": "2025-04-25T15:13:21.000000Z",
            "updated_at": "2025-04-25T15:13:21.000000Z"
        }
    ]
}
```


⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃

## End-point: Search Product by ID
Endpoint untuk mendapatkan data produk berdasarkan id
### Method: GET
>```
>{{product_url}}/api/products/10
>```
### Response: 200
```json
{
    "product_id": 10,
    "product_name": "Core i5-13400F",
    "brand": "Intel",
    "chategory": "Processor",
    "price": 3200000,
    "stock": 8,
    "created_at": "2025-04-25T15:13:21.000000Z",
    "updated_at": "2025-04-25T15:13:21.000000Z"
}
```

### Response: 200
```json
{
    "status": "Failed",
    "message": "Product not found",
    "data": null
}
```


⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃

## End-point: Add Product
Endpoint untuk menabahkan data produk
### Method: POST
>```
>{{product_url}}/api/products
>```
### Body (**raw**)

```json
{
    "product_name" : "Mouse Digital Alliance 120RS",
    "brand" : "Digital Alliance",
    "chategory" : "Hardware",
    "price" : 200000,
    "stock" : 5
}
```

### Response: 201
```json
{
    "status": "Success",
    "message": "Product created successfully",
    "data": {
        "product_name": "Mouse Digital Alliance 120RS",
        "brand": "Digital Alliance",
        "chategory": "Hardware",
        "price": 200000,
        "stock": 5,
        "updated_at": "2025-04-26T07:01:52.000000Z",
        "created_at": "2025-04-26T07:01:52.000000Z",
        "product_id": 91
    }
}
```


⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃

## End-point: Edit Product
Endpoint untuk mendapatkan edit data produk yang sudah ada
### Method: PUT
>```
>{{product_url}}/api/products/91
>```
### Body (**raw**)

```json

```

### Response: 200
```json
{
    "status": "Success",
    "message": "Product updated successfully",
    "data": {
        "product_id": 91,
        "product_name": "Mouse Digital Alliance 120RS",
        "brand": "Digital Alliance",
        "chategory": "Hardware",
        "price": 200000,
        "stock": 10,
        "created_at": "2025-04-26T07:01:52.000000Z",
        "updated_at": "2025-04-26T07:03:34.000000Z"
    }
}
```


⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃

## End-point: Delete Product
Endpoint untuk menghapus data pruoduk berdasarkan id
### Method: DELETE
>```
>{{product_url}}/api/products/89
>```
### Response: 200
```json
{
    "status": "Success",
    "message": "Product deleted successfully",
    "data": null
}
```


⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃

## End-point: Recom Build PC (AI)
Endpoint AI untuk mendapatkan rekomendasi build PC berdasarkan budget yang diberikan
### Method: GET
>```
>{{product_url}}/api/build/rekomendasi/20000000
>```
### Response: 200
```json
{
    "recommended_build": {
        "Processor": {
            "product_id": 8,
            "product_name": "Core i9-12900K",
            "brand": "Intel",
            "chategory": "Processor",
            "price": 6500000,
            "stock": 10,
            "created_at": "2025-04-25T15:13:21.000000Z",
            "updated_at": "2025-04-25T15:13:21.000000Z"
        },
        "RAM": {
            "product_id": 12,
            "product_name": "Corsair Vengeance 32GB DDR4",
            "brand": "Corsair",
            "chategory": "RAM",
            "price": 1600000,
            "stock": 19,
            "created_at": "2025-04-25T15:13:21.000000Z",
            "updated_at": "2025-04-25T15:13:21.000000Z"
        },
        "Motherboard": {
            "product_id": 50,
            "product_name": "Gigabyte Z690 UD DDR4",
            "brand": "Gigabyte",
            "chategory": "Motherboard",
            "price": 2800000,
            "stock": 20,
            "created_at": "2025-04-25T15:13:21.000000Z",
            "updated_at": "2025-04-25T15:13:21.000000Z"
        },
        "GPU": {
            "product_id": 60,
            "product_name": "RX 7800 XT 16GB",
            "brand": "PowerColor",
            "chategory": "GPU",
            "price": 8500000,
            "stock": 11,
            "created_at": "2025-04-25T15:13:21.000000Z",
            "updated_at": "2025-04-25T15:13:21.000000Z"
        },
        "Air Cooler": {
            "product_id": 81,
            "product_name": "Cooler Master Hyper 212 Black",
            "brand": "Cooler Master",
            "chategory": "Air Cooler",
            "price": 500000,
            "stock": 14,
            "created_at": "2025-04-25T15:13:21.000000Z",
            "updated_at": "2025-04-25T15:13:21.000000Z"
        }
    },
    "total_price": 19900000,
    "remaining_budget": 100000
}
```


⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃
_________________________________________________
Powered By: [postman-to-markdown](https://github.com/bautistaj/postman-to-markdown/)
