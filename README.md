<!-- LINK POSTMAN : https://documenter.getpostman.com/view/44194991/2sB2izFESN -->
# Project: User Service

## End-point: List Customer
Endpoint untuk mendapatkan data seluruh customer yang ada
### Method: GET
>```
>{{user_url}}/api/customers
>```
### Response: 200
```json
{
    "status": "Success",
    "message": "List of Customers",
    "data": [
        {
            "customer_id": 1,
            "customer_name": "Budi Santoso",
            "email": "budi@example.com",
            "address": "Jl. Merdeka No. 1, Jakarta",
            "phone_number": 81234567801,
            "created_at": "2025-04-25T15:13:41.000000Z",
            "updated_at": "2025-04-25T15:13:41.000000Z"
        },
        {
            "customer_id": 2,
            "customer_name": "Siti Aminah",
            "email": "siti@example.com",
            "address": "Jl. Kenanga No. 2, Bandung",
            "phone_number": 81234567802,
            "created_at": "2025-04-25T15:13:41.000000Z",
            "updated_at": "2025-04-25T15:13:41.000000Z"
        },
        {
            "customer_id": 3,
            "customer_name": "Agus Prasetyo",
            "email": "agus@example.com",
            "address": "Jl. Sudirman No. 3, Surabaya",
            "phone_number": 81234567803,
            "created_at": "2025-04-25T15:13:41.000000Z",
            "updated_at": "2025-04-25T15:13:41.000000Z"
        },
        {
            "customer_id": 4,
            "customer_name": "Dewi Lestari",
            "email": "dewi@example.com",
            "address": "Jl. Mawar No. 4, Yogyakarta",
            "phone_number": 81234567804,
            "created_at": "2025-04-25T15:13:41.000000Z",
            "updated_at": "2025-04-25T15:13:41.000000Z"
        },
        {
            "customer_id": 5,
            "customer_name": "Rudi Hartono",
            "email": "rudi@example.com",
            "address": "Jl. Melati No. 5, Semarang",
            "phone_number": 81234567805,
            "created_at": "2025-04-25T15:13:41.000000Z",
            "updated_at": "2025-04-25T15:13:41.000000Z"
        },
        {
            "customer_id": 6,
            "customer_name": "Linda Sari",
            "email": "linda@example.com",
            "address": "Jl. Anggrek No. 6, Medan",
            "phone_number": 81234567806,
            "created_at": "2025-04-25T15:13:41.000000Z",
            "updated_at": "2025-04-25T15:13:41.000000Z"
        },
        {
            "customer_id": 7,
            "customer_name": "Joko Widodo",
            "email": "joko@example.com",
            "address": "Jl. Flamboyan No. 7, Palembang",
            "phone_number": 81234567807,
            "created_at": "2025-04-25T15:13:41.000000Z",
            "updated_at": "2025-04-25T15:13:41.000000Z"
        },
        {
            "customer_id": 8,
            "customer_name": "Maya Puspita",
            "email": "maya@example.com",
            "address": "Jl. Cemara No. 8, Denpasar",
            "phone_number": 81234567808,
            "created_at": "2025-04-25T15:13:41.000000Z",
            "updated_at": "2025-04-25T15:13:41.000000Z"
        },
        {
            "customer_id": 9,
            "customer_name": "Tono Wijaya",
            "email": "tono@example.com",
            "address": "Jl. Nusa Indah No. 9, Makassar",
            "phone_number": 81234567809,
            "created_at": "2025-04-25T15:13:41.000000Z",
            "updated_at": "2025-04-25T15:13:41.000000Z"
        },
        {
            "customer_id": 10,
            "customer_name": "Ani Nuraini",
            "email": "ani@example.com",
            "address": "Jl. Teratai No. 10, Malang",
            "phone_number": 81234567810,
            "created_at": "2025-04-25T15:13:41.000000Z",
            "updated_at": "2025-04-25T15:13:41.000000Z"
        }
    ]
}
```


⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃

## End-point: List Customer by ID
Endpoint untuk mendapatkan data seluruh customer yang ada berdasarkan ID
### Method: GET
>```
>{{user_url}}/api/customers/11
>```
### Response: 200
```json
{
    "status": "Success",
    "message": "Customer Found",
    "data": {
        "customer_id": 2,
        "customer_name": "Siti Aminah",
        "email": "siti@example.com",
        "address": "Jl. Kenanga No. 2, Bandung",
        "phone_number": 81234567802,
        "created_at": "2025-04-25T15:13:41.000000Z",
        "updated_at": "2025-04-25T15:13:41.000000Z"
    }
}
```

### Response: 200
```json
{
    "status": "Failed",
    "message": "Customer not found",
    "data": null
}
```


⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃

## End-point: Add Customer
Endpoint untuk menambahkan data customer baru
### Method: POST
>```
>{{user_url}}/api/customers
>```
### Body (**raw**)

```json
{
    "customer_name" : "Malikinnnnn",
    "email" : "Malikinnnnnnn@gmail.com",
    "address" : "JL.Pulo",
    "phone_number" : 88767893019
}
```

### Response: 201
```json
{
    "status": "Success",
    "message": "Sale created successfully",
    "data": {
        "customer_name": "Malikin",
        "email": "Malikinnnn@example.com",
        "address": "JL.Pulowonokromo",
        "phone_number": 88767893019,
        "updated_at": "2025-04-26T06:53:40.000000Z",
        "created_at": "2025-04-26T06:53:40.000000Z",
        "customer_id": 11
    }
}
```

### Response: 200
```json
{
    "status": "Failed",
    "message": {
        "customer_name": [
            "The customer name field is required."
        ],
        "email": [
            "The email field is required."
        ],
        "address": [
            "The address field is required."
        ],
        "phone_number": [
            "The phone number field is required."
        ]
    },
    "data": null
}
```


⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃

## End-point: Edit Customer
Endpoint untuk edit data customer berdasarkan ID
### Method: PUT
>```
>undefined
>```
### Response: 200
```json
{
    "status": "Success",
    "message": "Customer updated successfully",
    "data": {
        "customer_id": 12,
        "customer_name": "Malikinnnnn",
        "email": "Malikinnnnnnn@gmail.com",
        "address": "JL.Pulo gadong",
        "phone_number": 88767893019,
        "created_at": "2025-04-26T07:04:23.000000Z",
        "updated_at": "2025-04-26T07:06:32.000000Z"
    }
}
```


⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃

## End-point: Delete Customer
Endpoint untuk menghapus data customer yang ada
### Method: DELETE
>```
>{{user_url}}/api/customers/13
>```
### Response: 200
```json
{
    "status": "Success",
    "message": "Customer deleted successfully",
    "data": null
}
```


⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃

## End-point: History Order Customer by ID
Endpoint untuk user dapat mencari history order berdasarkan ID Customer
### Method: GET
>```
>{{user_url}}/api/customers/orders/3
>```
### Response: 200
```json
{
    "status": "Success",
    "message": "Orders retrieved successfully",
    "data": [
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
}
```


⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃
_________________________________________________
Powered By: [postman-to-markdown](https://github.com/bautistaj/postman-to-markdown/)
