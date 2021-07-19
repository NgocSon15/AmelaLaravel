<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Discount</title>
</head>
<body>
    <form method="post" action="/display-discount">
        @csrf
        <label>Mô tả sản phẩm:</label>
        <p>
            <input type="text" name="description" placeholder="Mô tả">
        </p>
        <label>Giá niêm yết:</label>
        <p>
            <input type="text" name="price" placeholder="Giá">
        </p>
        <label>Tỷ lệ chiết khấu (%):</label>
        <p>
            <input type="text" name="rate" placeholder="Tỷ lệ">
        </p>
        <p>
            <button type="submit">Tính</button>
        </p>
    </form>
</body>
</html>
