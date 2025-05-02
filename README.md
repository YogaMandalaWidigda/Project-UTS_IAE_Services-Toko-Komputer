# Project: Order Service

## End-point: Data Order Customer by ID
Endpoint untuk mendapatkan data penjualan berdasarkan ID
### Method: GET
>```
>undefined
>```
### Response: 200
```json
[
    {
        "order_id": 2,
        "customer_id": 5,
        "product_id": 2,
        "quantity": 3,
        "customer_name": "Rudi Hartono",
        "product_name": "Ryzen 7 5800X",
        "price": 3400000,
        "total_price": 10200000,
        "created_at": "2025-05-02T12:39:26.000000Z",
        "updated_at": "2025-05-02T12:39:26.000000Z"
    },
    {
        "order_id": 3,
        "customer_id": 5,
        "product_id": 6,
        "quantity": 3,
        "customer_name": "Rudi Hartono",
        "product_name": "Core i5-12400F",
        "price": 2500000,
        "total_price": 7500000,
        "created_at": "2025-05-02T12:39:36.000000Z",
        "updated_at": "2025-05-02T12:39:36.000000Z"
    }
]
```


⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃

## End-point: List Data Order Customer
Endpoint untuk mendapatkan data seluruh penjualan
### Method: GET
>```
>{{order_url}}/api/orders
>```
### Response: 200
```json
[
    {
        "order_id": 1,
        "customer_id": 4,
        "product_id": 12,
        "quantity": 3,
        "customer_name": "Dewi Lestari",
        "product_name": "Corsair Vengeance 32GB DDR4",
        "price": 1600000,
        "total_price": 4800000,
        "created_at": "2025-04-26T06:25:03.000000Z",
        "updated_at": "2025-04-26T06:25:03.000000Z"
    },
    {
        "order_id": 4,
        "customer_id": 3,
        "product_id": 10,
        "quantity": 2,
        "customer_name": "Agus Prasetyo",
        "product_name": "Core i5-13400F",
        "price": 3200000,
        "total_price": 6400000,
        "created_at": "2025-04-26T06:30:02.000000Z",
        "updated_at": "2025-04-26T06:30:02.000000Z"
    },
    {
        "order_id": 5,
        "customer_id": 3,
        "product_id": 60,
        "quantity": 3,
        "customer_name": "Agus Prasetyo",
        "product_name": "RX 7800 XT 16GB",
        "price": 8500000,
        "total_price": 25500000,
        "created_at": "2025-04-26T06:33:28.000000Z",
        "updated_at": "2025-04-26T06:33:28.000000Z"
    }
]
```


⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃

## End-point: Add Order
Endpoint untuk menambahkan data penjualan
### Method: POST
>```
>{{order_url}}/api/orders
>```
### Body (**raw**)

```json
{
  "customer_id": 4,
  "product_id": 12,
  "quantity": 3
}

```

### Response: 201
```json
{
    "customer_id": 3,
    "product_id": 10,
    "quantity": 2,
    "customer_name": "Agus Prasetyo",
    "product_name": "Core i5-13400F",
    "price": 3200000,
    "total_price": 6400000,
    "updated_at": "2025-04-26T06:30:02.000000Z",
    "created_at": "2025-04-26T06:30:02.000000Z",
    "id": 4
}
```


⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃
_________________________________________________
Powered By: [postman-to-markdown](https://github.com/bautistaj/postman-to-markdown/)
