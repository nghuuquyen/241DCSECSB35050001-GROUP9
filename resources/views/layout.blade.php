<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Book List')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <!-- slick carousel -->
    <link href="https://cdn.jsdelivr.net/npm/slick-carousel/slick/slick.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/slick-carousel/slick/slick-theme.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/slick-carousel/slick/slick.min.js"></script>


    <style>
        
        /* payment start */
        .picture {
        width: 70px;
        height: auto;
        }

        .quantity {
        width: 50px;
        text-align: center;
        }
        body {
            font-family:  sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 0;
        }

        .subtotal {
            font-weight: bold;
        }

        .total {
            text-align: right;
        }
        .btn-del{
            padding: 0;
            border: none;
            background: none;
        }
        /* Responsive adjustments */
        @media (max-width: 768px) {
            .table thead {
                display: none;
            }

            .table tbody tr {
                display: flex;
                flex-direction: row;
                flex-wrap: wrap;
                margin-bottom: 1rem;
                border: 1px solid #dee2e6;
                border-radius: 8px;
                overflow: hidden;
                padding: 1rem;
            }

            .table tbody td {
                display: flex;
                align-items: center;
                padding: 0.5rem;
            }

            .table tbody td.picture-cell {
                flex: 1 1 100px;
            }

            .table tbody td.info-cell {
                flex: 3;
                display: flex;
                flex-direction: column;
                justify-content: center;
            }

            .table tbody td.info-cell span {
                margin-bottom: 0.5rem;
            }

            .table tbody td.actions-cell {
                flex: 2;
                display: flex;
                justify-content: space-between;
                align-items: center;
            }

            .total {
                text-align: center;
                margin-top: 1rem;
            }
        }
/* end payment */

/* start customer */

        body {
            font-family:  sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        .form-container {
            display: flex;
            justify-content: space-between;
            gap: 20px;
        }

        .info, .order {
            flex: 1;
            padding: 20px;
        }

        /* Thông tin cá nhân */
        .info h2 {
            margin-bottom: 20px;
            color: #333;
            text-align: left;
        }

        .form-group {
            display: flex;
            margin-bottom: 15px;

        }

        label {
            flex: 1;
            text-align: right;
            margin-right: 10px;
            font-weight: bold;
            color: #ff0000;
        }

        input {
            flex: 2;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 14px;
        }

        /* Đơn hàng */
        .order h2 {
            margin-bottom: 20px;
            color: #333;
            text-align: left;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        th, td {
            border: 1px solid #ccc;
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
            font-weight: bold;
        }

        tfoot td {
            font-weight: bold;
        }

        .btn-submit {
            display: block;
            width: 35%; /* Giảm chiều dài xuống một nửa */
            padding: 10px 0;
            background-color: #4caf50;
            color: #fff;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
            text-align: center;
            margin-left: auto; /* Căn nút sát lề phải */
            margin-right: 0;
        }


        .feedback {
            display: flex;
            flex-direction: column; /* Sắp xếp theo cột */
            gap: 10px; /* Khoảng cách giữa textarea và nút */
            max-width: 500px; /* Đặt chiều rộng tối đa */
            margin: 0 auto; /* Canh giữa container */
        }

        .feedback-textarea {
            width: 100%;
            height: 150px; /* Chiều cao của textarea */
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 14px;
            resize: vertical; /* Cho phép thay đổi chiều cao */
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); /* Hiệu ứng đổ bóng */
        }

        .feedback-textarea:focus {
            outline: none;
            border-color: #4caf50; /* Đổi màu viền khi focus */
            box-shadow: 0 0 4px rgba(76, 175, 80, 0.5); /* Hiệu ứng focus */
        }

        .btn-submit-feedback {
            width: 120px; /* Chiều dài nút */
            padding: 10px;
            background-color: #4caf50;
            color: #fff;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
            align-self: flex-end; /* Đẩy nút về lề phải */
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); /* Hiệu ứng đổ bóng */
            transition: background-color 0.3s ease; /* Hiệu ứng hover mượt */
        }

        .btn-submit-feedback:hover {
            background-color: #45a049; /* Đổi màu khi hover */
        }



        /* Responsive */
        @media (max-width: 768px) {
            .form-container {
                flex-direction: column;
            }
        }

/* end customer */
/* start success */
/* Tổng thể */
body {
    font-family: sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f9f9f9;
}

.success-container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 20px;
    text-align: center;
}

/* Header */
.success-header {
    background-color: #f2f2f2;
    padding: 20px;
    border-radius: 8px;
    margin-bottom: 20px;
}

.success-icon {
    width: 50px;
    margin-bottom: 10px;
}

.success-header h2 {
    font-size: 24px;
    color: #333;
    margin: 10px 0;
}

.success-header p {
    font-size: 16px;
    color: #666;
}

/* Nút */
.button-group {
    margin-bottom: 20px;
}

button {
    padding: 10px 20px;
    border: none;
    border-radius: 4px;
    font-size: 16px;
    cursor: pointer;
    margin: 0 10px;
    transition: background-color 0.3s ease;
}

.btn-home {
    background-color: #4caf50;
    color: #fff;
}

.btn-home:hover {
    background-color: #45a049;
}

.btn-track {
    background-color: #4caf50;
    color: #fff;
}

.btn-track:hover {
    background-color: #45a049;
}

/* Sản phẩm */
.product-section h3 {
    font-size: 20px;
    color: #333;
    margin-bottom: 20px;
}

.product-grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(150px, 1fr));
    gap: 20px;
    margin-bottom: 20px;
}

.product-card {
    background-color: #fff;
    padding: 15px;
    border-radius: 8px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    text-align: center;
}

.product-image {
    width: 100%;
    height: 150px;
    background-color: #ccc;
    border-radius: 4px;
    margin-bottom: 10px;
}

.product-card h4 {
    font-size: 16px;
    color: #333;
    margin-bottom: 5px;
}

.product-card p {
    font-size: 14px;
    color: #666;
}

/* Phân trang */
.pagination {
    display: flex;
    justify-content: center;
    gap: 10px;
}

.page {
    padding: 8px 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    cursor: pointer;
    background-color: #fff;
}

.page:hover {
    background-color: #4caf50;
    color: #fff;
}
.success-icon {
    width: 150px;
    height: 150px;
    margin-bottom: 10px;
}

.success-icon .icon {
    width: 100%;
    height: 100%;
}
.success-icon-container {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    padding: 20px;
    margin-bottom: 20px;
    text-align: center;
}

/* CSS gốc giữ nguyên, thêm media queries để responsive */

/* Đảm bảo phần chính không bị quá rộng trên màn hình nhỏ */
.success-container {
    padding: 20px;
    max-width: 100%;
    box-sizing: border-box;
}

/* Responsive cho màn hình nhỏ (dưới 768px) */
@media (max-width: 768px) {
    .success-header h2 {
        font-size: 20px;
    }

    .success-header p {
        font-size: 14px;
    }

    .button-group {
        display: flex; /* Sử dụng flexbox để căn chỉnh */
        flex-direction: column; /* Đặt các phần tử thành cột */
        align-items: center; /* Căn giữa các nút theo chiều ngang */
    }
    .button-group button {
        display: block;
        width: 30%;
        margin: 10px 0;
    }

    .product-grid {
        grid-template-columns: repeat(auto-fill, minmax(120px, 1fr)); /* Giảm kích thước cột */
        gap: 15px; /* Giảm khoảng cách */
    }

    .product-card {
        padding: 10px;
    }

    .product-card h4 {
        font-size: 14px;
    }

    .product-card p {
        font-size: 12px;
    }

    .pagination .page {
        padding: 6px 10px;
        font-size: 14px;
    }
}

/* Responsive cho màn hình rất nhỏ (dưới 480px) */
@media (max-width: 480px) {
    .success-icon {
        width: 100px;
        height: 100px;
    }

    .success-header h2 {
        font-size: 18px;
    }

    .success-header p {
        font-size: 12px;
    }

    .product-grid {
        grid-template-columns: 1fr; /* Một cột trên màn hình nhỏ */
    }

    .pagination {
        flex-direction: column;
        gap: 5px;
    }

    .pagination .page {
        width: 100%;
        text-align: center;
    }
}

/* end success */

        
        .sidebar {
            border-right: 1px solid #ccc;
        }

        .book-card {
            transition: transform 0.2s;
        }

        .book-card:hover {
            transform: scale(1.03);
        }
        .carousel-item {
            height: 300px; /* Chiều cao của banner */
            background-size: cover;
            background-position: center;
        }

        .carousel-caption h5 {
            font-size: 2.5rem;
            color: #fff;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.8);
        }
        .banner-item {
            background-size: cover;
            background-position: center;
            height: 300px;
        }

        /* Điều chỉnh container */
        .popular-books,
        .new-books {
            display: flex;
            overflow: hidden;
        }

        /* Điều chỉnh từng card */
        .card {
            width: 300px;
            margin: 0 10px;
            border: none;
            background-color: #ffffff;
            text-align: center;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }

    </style>
    @stack('styles')
</head>

<body>
    <!-- Header -->
    <header class="bg-light py-3">
        <div class="container d-flex justify-content-between align-items-center">
            <!-- Logo -->
            <a href="{{ url('/') }}" class="text-decoration-none text-dark">
                <h1 class="h3 m-0">Books</h1>
            </a>

            <!-- Navigation -->
            <nav>
                <ul class="nav">
                    <li class="nav-item"><a href="{{ url('/') }}" class="nav-link text-dark">Homepage</a></li>
                    <li class="nav-item"><a href="{{ url('/booklist') }}" class="nav-link text-dark">Book</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-dark" href="{{ url('/booklist') }}" id="categoryDropdown" role="button" data-bs-toggle="dropdown">
                            Category
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Literature</a></li>
                            <li><a class="dropdown-item" href="#">Science</a></li>
                            <li><a class="dropdown-item" href="#">Business</a></li>
                        </ul>
                    </li>
                    <li class="nav-item"><a href="{{ url('/about') }}" class="nav-link text-dark">About Us</a></li>
                </ul>
            </nav>

            <!-- Search and Cart -->
            <div class="d-flex align-items-center">
                <input type="text" class="form-control me-2" placeholder="Search...">
                <a href="#" class="btn btn-outline-secondary">
                    <i class="bi bi-cart"></i>
                </a>
            </div>
        </div>
    </header>

    <!-- Content -->
    <div class="container py-5">
        @yield('content')
    </div>

    <!-- Footer -->
    <footer class="bg-light py-4 mt-5">
        <div class="container text-center">
            <div class="mb-3">
                <!-- Social Media Links -->
                <a href="#" class="text-dark me-3"><i class="bi bi-facebook"></i></a>
                <a href="#" class="text-dark me-3"><i class="bi bi-linkedin"></i></a>
                <a href="#" class="text-dark me-3"><i class="bi bi-youtube"></i></a>
                <a href="#" class="text-dark"><i class="bi bi-instagram"></i></a>
            </div>
            <p class="text-muted small">
                About | Feedback | Help | Terms | Privacy | Advertise | Contact
            </p>
            <p class="text-muted small mb-0">© 2024 Books. All rights reserved.</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    @stack('scripts')
</body>

</html>