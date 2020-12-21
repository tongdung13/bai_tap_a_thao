ORM là gì?

ORM là 1 kỹ thuật lập trình giúp ánh xạ các record dữ liệu trong hệ quản trị cơ sở dữ liệu sang dạng đối tượng đang định nghĩa trong các class - một khái niệm phổ biến được sử dụng trong tất cả các ngôn ngữ hiện đại ngày nay như: Java, PHP, Ruby. Bạn có thể áp dụng kĩ thật này với bất cứ dự án nào bạn thích.




Ưu nhược điểm

-Ưu điểm

- Tuân thủ nguyên tắc DRY, tập trung hóa code của bạn tại một chỗ, và việc chỉnh sửa, maintain, tái sử dụng lại code sẽ dễ dàng hơn
- Rất nhiều thứ được thực hiện "tự động", liên quan tới việc xử lí dữ liệu, trong ví dụ trên chúng ta không cần quan tâm đến việc dùng vòng để convert data từ mysql ra, Chỉ cần biết đầu vào là keyword đầu ra trả lại 1 danh sách các quyển sách có author=Linus
- Việc sử dụng ORM làm bạn bắt buộc phải viết code theo mô hình MVC, khiến code của bạn dễ sửa đổi, bảo trì hơn.
- Bạn không cần phải biết quá nhiều về MYSQL, bạn vẫn có thể tiếp cận dễ dàng với ORM.
- Model k ràng buộc chặt chẽ với ứng dụng, hay nói cách khác, Model thì linh hoạt, vì vậy bạn có thể thay đổi hoặc sử dụng nó bất cứ chỗ nào
- ORM cho phép bạn tận dụng ưu điểm của OOP như kế thừa dữ liệu mà không phải đau đầu

--Nhược điểm



 + Với mỗi framework sẽ có 1 thư viện ORM khác nhau, tất nhiên là bạn phải mất thời gian học nó. Và vì chúng là thư viện nên sẽ rất "nặng".
 + Performance ổn đối với các truy vấn thông thường, nhưng Raw SQL sẽ luôn làm tốt hơn với các dự án lớn.
 + ORM được coi là abstracts của DB. Nếu bạn không quan tâm đến những gì thực sự xảy ra khi sử dụng ORM. Nó có thể là cái bẫy với những bài toán N + 1 query.
