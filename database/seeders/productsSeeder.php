<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class productsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            [
                'name' => 'Bàn Trà Gỗ Cao Su',
                'slug' => 'Bàn Trà Gỗ Cao Su',
                'price' => 649000,
                'sale_price' => 490000,
                'description' => 'CHI TIẾT VẬT LIỆU Gỗ công nghiệp Bàn Sofa Gỗ Công Nghiệp MILAN 602 được làm từ chất liệu gỗ công nghiệp (PB, MDF) đạt tiêu chuẩn CARB-P2, hoàn toàn an toàn cho sức khỏe con người và được hội đồng quản lý rừng cấp chứng chỉ FSC về bảo tồn và phát triển rừng. Gỗ cao su tự nhiên Bàn Sofa Gỗ Cao Su Tự Nhiên MILAN 602 được làm từ chất liệu gỗ tự nhiên mang đến khả năng chịu tải và tuổi thọ cao cho sản phẩm. ĐẶC ĐIỂM NỔI BẬT Mẫu bàn thuộc bộ sưu tập nội thất MILAN được thiết kế từ nguồn cảm hứng kinh đô thời trang thế giới – nước Ý, mang lại nét đột phá với phong cách hiện đại và tinh tế được thể hiện từng đường nét. Tối ưu diện tích phòng khách Mặt bàn sofa có đường kính 60cm, nhỏ gọn nhưng vẫn đảm bảo công năng sử dụng, dễ dàng bài trí thêm bộ bình ly nước, tạp chí. Mặt bàn trà có vân gỗ tự nhiên đặc sắc Chiếc bàn sofa được phủ veneer gỗ sồi một cách cẩn thận mang đến những đường nét vân gỗ tinh tế cũng như vẻ ngoài hiện đại vô cùng bắt mắt. Kết cấu chân bàn chắc chắn Chân bàn gỗ cao su tự nhiên được bo tròn các cạnh mang đến sự thiết kế mềm mại, uyển chuyển và có khả năng chịu lực tốt.KHÔNG GIAN SỐNG Bàn Sofa – Bàn Cafe – Bàn Trà Gỗ Cao Su MOHO MILAN 602 có thiết kế bo tròn truyền thống, mặt bàn rộng rãi thích hợp để nhiều món đồ trang trí. Sản phẩm nổi bật với vân gỗ tự nhiên bắt mắt, thích hợp cho bất kỳ không gian nào trong gia đình từ phòng khách hiện đại, cho đến phòng ngủ ấm cúng, hay một chiếc ban công thơ mộng.',
                'short_description' => 'Kích thước: Đường kính rộng 60cm x Cao 42cm Chất liệu: - Mặt bàn: Gỗ công nghiệp MDF chuẩn CARB-P2, Sơn phủ UV - Chân bàn: Gỗ cao su tự nhiên',
                'image' => 'images/product/product-1.webp',
                'instock' => 100,
                'category_id' => 1
            ],
            [
                'name' => 'Tủ Kệ Tivi Gỗ',
                'slug' => 'Tủ Kệ Tivi Gỗ',
                'price' => 3490000,
                'sale_price' => 2190000,
                'description' => 'CHI TIẾT VẬT LIỆU Gỗ cao su tự nhiên Sử dụng chất liệu gỗ cao su giúp sản phẩm có khả năng chịu lực tốt và độ bền cao. Gỗ công nghiệp sử dụng 100% chất liệu gỗ công nghiệp (PB, MDF) đạt chuẩn CARB-P2 an toàn tuyệt đối cho người sức khỏe người dùng và đạt chứng nhận FSC bảo vệ và phát triển rừng bền vững. ĐẶC ĐIỂM NỔI BẬT Bộ sưu tập nội thất OSLO lấy cảm hứng từ những nhịp sống hiện đại, hối hả và nhộn nhịp của thành phố OSLO của Na Uy. Đặc trưng của các sản phẩm từ bộ sưu tập nội thất này là những đường nét bo tròn đến hoàn hảo, tăng thêm sự thanh lịch. Đặc biệt chi tiết hình tròn được tận dụng một cách độc đáo và sáng tạo trong từng thiết kế, mang đến làn gió hiện đại cho mọi không gian. Tủ tivi có kiểu dáng hiện đại, tối giản Với các đường nét thiết kế tinh tế, tủ kệ tivi hiện đại phù hợp với nhiều phong cách nội thất, mang đến sự hài hoà cho không gian nội thất phòng khách gia đình bạn.Bề mặt tủ có vân gỗ tự nhiên Bề mặt tủ kệ được sử dụng công nghệ in UV vân gỗ tạo ra hình dáng đường vân gỗ sồi vô cùng tự nhiên khi phun trực tiếp lên bề mặt mang lại sự bền bỉ theo thời gian, phù hợp mọi không gian sống. Màu sắc tủ kệ hài hòa, hiện đại, hoàn toàn tự nhiên khó tìm thấy ở những sản phẩm nội thất gỗ khác trên thị trường.Không gian lưu trữ lớn Ngăn kéo tủ có kích thước rộng, kéo mở toàn phần giúp tăng không gian lưu trữ các vật dụng cần thiết trong gia đình.',
                'short_description' => 'Kích thước: Dài 140/160/180 cm x Rộng 40 cm x Cao 60 cm Chất liệu: - Thân tủ: Gỗ công nghiệp PB chuẩn CARB-P2 (*), Sơn phủ UV vân gỗ sồi tự nhiên - Chân tủ: Gỗ cao su tự nhiên',
                'image' => 'images/product/product-2.webp',
                'instock' => 100,
                'category_id' => 1
            ],
            [
                'name' => 'Giường Ngủ Gỗ Cao Su',
                'slug' => 'Giường Ngủ Gỗ Cao Su',
                'price' => 10990000,
                'sale_price' => 8190000,
                'description' => 'CHI TIẾT VẬT LIỆU Gỗ cao su tự nhiên Sử dụng chất liệu gỗ cao su giúp giuờng ngủ có khả năng chịu lực tốt và độ bền cao. Gỗ công nghiệp Plywood Tấm phảm sử dụng chất liệu Plywood 12mm theo tiêu chuẩn CARBP2 vừa thân thiện với môi trường, đảm bảo sức khỏe và đặc biệt độ chịu lực tại 1 khu vực với diện tích 400 x 488mm lên tới 175kg khi dùng nệm trên 15cm.ĐẶC ĐIỂM NỔI BẬT Bộ sưu tập HOBRO lấy cảm hứng từ những ngôi nhà VIKING tại HOBRO kết hợp giữa cổ điển và hiện đại mang đến những cảm giác vô cùng thú vị chắc chắn sẽ khiến căn phòng của bạn trở nên tuyệt vời hơn bao giờ hết  Kiểu dáng có thiết kế độc đáo, mới lạ Những đường veneer đan xéo được các thợ thủ công lành nghề khéo léo ghép 1 cách tỉ mỉ và chỉnh chu đã tạo ra điểm nhấn vô cùng độc đáo ở phần đầu và thân giường HOBRO. Nghệ thuật hình học: Sử dụng veneer tràm đặc biệt với kỹ thuật dán cao cấp tạo ra hiệu ứng 3D hình học đối xứng nhau.       Hiệu ứng màu sắc 3D: Với các đường veneer đan xen và đối xứng nhau đã tạo nên một sắc màu tổng thể có thể thay đổi tùy vào mỗi góc nhìn khác nhau. Khi nhìn chính diện sẽ thấy sự đối lập hoàn toàn giữa 2 màu veneer nhưng nhìn chéo sẽ thấy màu sắc giữa 2 mảng đối xứng gần dần dần tương đồng.  Giường ngủ có đa dạng kích thước Sản phẩm được phân phối với 2 kích thước phổ biến gồm: 1m6 và 1m8 rất dễ dàng để lựa chọn và phù hợp với những nội thất phòng ngủ khác, tô điểm không gian nhà bạn.Giường sở hữu kết cấu chắc chắn Khung giường được lắp khít nối với nhau bằng những thanh vạt bản to chắc chắn đặc biệt còn được bổ sung thêm khung và chân sắt ở chính giữa tăng độ chịu lực lên gấp 3 lần mà vẫn đảm bảo được tính thẩm mỹ của giường.',
                'short_description' => 'Kích thước phủ bì - Dài 210cm x Rộng 171/ 191 cm - Cao đến đầu giường 90 cm - Gầm giường cao 16cm Chất liệu: - Thân giường: Gỗ cao su tự nhiên - Tấm phản: Gỗ plywood chuẩn CARB-P',
                'image' => 'images/product/product-3.webp',
                'instock' => 100,
                'category_id' => 2
            ],
            [
                'name' => 'Tủ Đầu Giường Gỗ',
                'slug' => 'Tủ Đầu Giường Gỗ',
                'price' => 1590000,
                'sale_price' => 1490000,
                'description' => 'CHI TIẾT VẬT LIỆU Gỗ công nghiệp Sản phẩm sử dụng chất liệu gỗ công nghiệp (PB, MDF) đạt chuẩn CARB-P2 an toàn tuyệt đối cho người sức khỏe người dùng và đạt chứng nhận FSC bảo vệ và phát triển rừng. ĐẶC ĐIỂM NỔI BẬT VIENNA là niềm ao ước đặt chân đến của nhiều người bởi nó là thủ đô nổi tiếng bậc nhất về sự lộng lẫy của các tòa lâu đài nguy nga, tráng lệ. Đây là nguồn cảm hứng cho bộ sưu tập nội thất VIENNA, nhờ vậy mà các sản phẩm thuộc bộ sưu tập này đều mang nét hiện đại của thủ đô nước Áo. Kiểu dáng tối giản, hiện đại Với màu sắc và lối thiết kế đơn giản dễ kết hợp các mẫu nội thất khác.Tối ưu hóa không gian lưu trữ Với 2 hộc tủ rộng rãi giúp lưu trữ đồ tạo sự ngăn nắp. Ray trượt IVANs  Tăng tuổi thọ sản phẩm lên đến 80,000 lần đóng/mở, ray trượt chống rỉ sét, ray trượt êm ái, dễ dàng đóng mở hộc tủ.Kiểu dáng hiện đại, không tay nắm Ngăn tủ không tay nắm hiện đại, sử dụng an toàn khi có nhà có trẻ nhỏ.Trang bị dây đai bảo vệ nội thất Anti Tip Kit Giúp tủ không bị lật đổ về phía trước gây nguy hiểm cho người dùng, an toàn cho trẻ nhỏ.Bề mặt tủ sơn phủ UV Giúp bề mặt sản phẩm nhẵn, nhịn, hạn chế trầy xước. Chân nhựa giúp nâng đỡ sản phẩm, giảm trầy xước Bảo vệ sàn nhà giảm trầy xước và dễ dàng khi di chuyển sản phẩm. Có 02 màu sắc lựa chọnMàu gỗ tự nhiên và màu nâu',
                'short_description' => 'Kích thước: Dài 48cm x Rộng 40cm x Cao 50cm Chất liệu: Gỗ công nghiệp PB chuẩn CARB-P2, Sơn phủ UV',
                'image' => 'images/product/product-4.webp',
                'instock' => 100,
                'category_id' => 2
            ],
            [
                'name' => 'Bàn Ăn Gỗ Cao Su Tự Nhiên',
                'slug' => 'Bàn Ăn Gỗ Cao Su Tự Nhiên',
                'price' => 4590000,
                'sale_price' => 3790000,
                'description' => 'CHI TIẾT VẬT LIỆU Gỗ cao su tự nhiên Chất liệu gỗ cao su tự nhiên đảm bảo độ chắc chắn cao, chống công vênh, mối mọt. Màu gỗ bắt mắt và tom gỗ đẹp tự nhiên.ĐẶC ĐIỂM NỔI BẬT Các thiết kế trong bộ sưu tập nội thất VLINE mang trong mình nét đẹp đặc trưng của hồn Việt cùng vẻ đẹp năng động của thời đại. V” là viết tắt của từ “Việt” trong “Việt Nam”. “LINE” là các đường nét mang xu hướng hiện đại, phóng khoáng của ngày nay. Bàn ăn có 2 kích thước 90cm và 160cm Sự đa dạng trong kích thước bàn ăn mang lại nhiều lựa chọn cho khách hàng, phù hợp nhiều phong cách nội thất phòng ăn và diện tích không gian gia đình bạn. Mặt bàn sơn phủ NC và veneer sồi Chất gỗ cao giúp cho bề mặt bàn ăn trở nên vô cùng mịn màng và nhẵn bóng, màu sắc tươi sáng đẹp như tự nhiên. Cạnh bàn được thiết kế bo tròn Thiết kế tối ưu sự an toàn của người dùng, hạn chế tổn thương nếu xảy ra va đập, nhất là đối với những gia đình có trẻ nhỏ hiếu động. Chân bàn độc đáo Thiết kế chân chữ X độc đáo của bàn ăn cơm VLINE tạo nên sự liên kết cứng cáp, tăng khả năng chịu lực, đảm bảo sự chắc chắn cho bàn ăn. Tránh tình trạng rung lắc mỗi khi sử dụng. Chiều cao bàn thể hiện được thói quen sử dụng của người Việt Chiều cao bàn VLINE là 65cm so với bàn ăn bình thường (75cm). Kích thước bàn ăn này rất dễ dàng bắt gặp tại cái ngôi nhà hay quán xá tại Việt Nam vì nó mang đến sự gần gũi và thuận tiện khi dùng bữa và làm việc.Kết cấu chắc chắn Chân bàn từ gỗ cao su tự nhiên, đảm bảo kết cấu chắc chắn và khả năng chịu lực tốt. ',
                'short_description' => 'Kích thước: Dài 160cm x Rộng 75cm x Cao 65cm hất liệu: Gỗ cao su tự nhiên',
                'image' => 'images/product/product-5.jpg',
                'instock' => 100,
                'category_id' => 3
            ],
            [
                'name' => 'Ghế Ăn Gỗ Cao Su Tự Nhiên',
                'slug' => 'Ghế Ăn Gỗ Cao Su Tự Nhiên',
                'price' => 1990000,
                'sale_price' => 1390000,
                'description' => 'CHI TIẾT VẬT LIỆU Gỗ cao su Sử dụng chất liệu gỗ cao su giúp sản phẩm có khả năng chịu lực và độ bền cao. Vải bọc bọc sợi tổng hợp  Vải bọc sợi tổng hợp có khả năng chống thấm nước và dầu ĐẶC ĐIỂM NỔI BẬT Đề cao tính tiện nghi và tối giản trong không gian sống, MOHO mang đến thiết kế ghế ăn gia đình VERONA hiện đại và đẹp đẽ, món nội thất này màu sắc trang nhã kết hợp cùng kết cấu cực kỳ chắc chắn với chất liệu gỗ cao su tự nhiên. Góc nghiêng hoàn hảo Lưng tựa ghế ăn được thiết kế cong 1 góc 15 độ, nâng đỡ xương sống cơ thể, tạo sự mềm mại và thoải mái khi ngồi. Đệm ghế uốn cong độc đáo Ghế ăn gỗ gia đình có mặt ghế được thiết kế tối ưu bằng đường uốn cong tạo cảm giác dễ chịu, nâng đỡ xương chậu khi ngồi. Vải bọc sợi tổng hợp Chất liệu vải vải bọc sợi tổng hợp trên đệm ngồi ghế có khả năng chống thấm nước và dầu',
                'short_description' => 'Kích thước: Dài 46cm x Rộng 54cm x Cao 82cm Chất liệu: - Gỗ cao su tự nhiên - Vải bọc sợi tổng hợp có khả năng chống thấm nước và dầu Chống thấm, cong vênh, trầy xước, mối mọt',
                'image' => 'images/product/product-6.jpg',
                'instock' => 100,
                'category_id' => 3
            ],
            [
                'name' => 'Bàn Làm Việc Gỗ',
                'slug' => 'Bàn Làm Việc Gỗ',
                'price' => 2990000,
                'sale_price' => 1690000,
                'description' => 'CHI TIẾT VẬT LIỆU  Gỗ công nghiệp  Bàn làm việc sử dụng chất liệu gỗ công nghiệp (PB, MDF) đạt chuẩn CARB-P2 an toàn tuyệt đối cho người sức khỏe người dùng và đạt chứng nhận FSC bảo vệ và phát triển rừng, góp phần vào sự phát triển rừng một cách bền vững.          Gỗ tràm Chất liệu gỗ tràm tự nhiên đảm bảo vệ độ chắc chắn cao, chống công vênh, mối mọt cho bàn làm việc.ĐẶC ĐIỂM NỔI BẬT Các thiết kế trong bộ sưu tập nội thất VLINE mang trong mình nét đẹp đặc trưng của hồn Việt cùng vẻ đẹp năng động của thời đại. V” là viết tắt của từ “Việt” trong “Việt Nam”. “LINE” là các đường nét mang xu hướng hiện đại, phóng khoáng của ngày nay.   Bàn có kích thước vừa phải               Bàn làm việc có kích thước vừa phải, gọn gàng, không chiếm quá nhiều diện tích, độ rộng vừa đủ có thể để được nhiều vật dụng như: tài liệu, máy vi tính, laptop, sách.Chân bàn sử dụng chất liệu gỗ tràm Mang đến sự an tâm về độ chắc chắn khi sử dụng.                 Thanh ngang ở chân                Thanh ngang giúp cho bàn trở nên cứng cáp, giúp bàn không có cảm giác đơn điệu.Có 2 màu để lựa chọn Màu gỗ tự nhiên và màu nâu.',
                'short_description' => 'Kích thước: Dài 110cm x Rộng 55cm x Cao 74cm Chất liệu: - Mặt bàn: Gỗ công nghiệp PB chuẩn CARB-P2 (*), Veneer gỗ tràm tự nhiên - Chân bàn: Gỗ tràm tự nhiên',
                'image' => 'images/product/product-7.webp',
                'instock' => 100,
                'category_id' => 4
            ],
            [
                'name' => 'Ghế Xoay Văn Phòng Tay Gập',
                'slug' => 'Ghế Xoay Văn Phòng Tay Gập',
                'price' => 1690000,
                'sale_price' => 1290000,
                'description' => 'CHI TIẾT VẬT LIỆU Nhựa cao cấp Khung ghế, tựa tay và bánh xe được làm bằng nhựa cao cấp có độ bền sử dụng cao Vải lưới mềm mại thoáng khí Với chất liệu vải nhập cao cấp, thoáng khí giúp bạn luôn thoải mái dù sử dụng trong nhiều giờ. ĐẶC ĐIỂM NỔI BẬT Thiết kế lưng trung với chiều cao phổ biến Với chiều cao linh hoạt có thể thay đổi từ 38 – 45 cm tính từ nệm ghế so với mặt đất, phần lưng trung cao 49 cm rất phù hợp với người Việt Nam.Đệm ngồi thoáng mát – thiết kế vừa phải Nệm ghế dày 7 cm, sử dụng vải 3 lớp mềm mại dễ dàng vệ sinh, hạn chế bị dơ và đặc biệt mang lại cảm giác êm ái thoải mái khi bạn ngồi trong nhiều giờ.Tựa lưng chắc chắn, bo cong mềm mại Với thiết kế tối ưu, tựa lưng sử dụng chất liệu nhựa PP cao cấp qua đó hình thành nên đường nét bo cong tinh tế, chắc chắn, là điểm tựa vững chắc cho phần thân trên cơ thể người dùng, hỗ trợ nâng đỡ tối ưu và bảo vệ cột sống người ngồi.Tay gập thông minh Tay gập được thiết kế thông minh điều chỉnh lên đến 90 độ, bạn có thể dễ dàng thay đổi lên xuống, phù hợp với thể trạng của mọi người. Việc thay đổi linh hoạt độ cao để tay thường xuyên có thể giúp bạn tránh mệt và nhức mỏi ở khớp vai hay tay cách hiệu quả.Vải lưới mềm mại thoáng khí Phần tựa lưng với vải lưới thoáng khí tốt, độ chắc chắn cao đem đến cho bạn trải nghiệm thú vị và cảm giác thoải mái.Điều chỉnh linh hoạt và phù hợp với nhiều không gian Pit tông thủy lực cao cấp giúp dễ dàng thay đổi độ cao của ghế  từ 38 - 45 cm phù hợp với mọi không gian, địa hình và thể trạng của mỗi người. Xoay 360 độ và di chuyển ít tiếng ồn Chân ghế được làm bằng hợp kim nhôm/ nhự cao cấp kết cấu sao 5 cánh vững chắc kết hợp với bánh xe nhựa cao cấp, độ bền cao đảm bảo giúp ghế quay 360 độ và di chuyển êm ái theo mọi hướng với hầu hết các loại mặt sàn khác nhau.',
                'short_description' => 'Kích thước: Dài 52cm x Rộng 65cm x Cao 94-101cm Chất liệu: - Khung ghế: nhựa cao cấp - Tựa lưng và nệm ghế: vải lưới mềm mại thoáng khí',
                'image' => 'images/product/product-8.webp',
                'instock' => 100,
                'category_id' => 4
            ],
            [
                'name' => 'Hệ tủ bếp Kitchen Premium Grenaa',
                'slug' => 'Hệ tủ bếp Kitchen Premium Grenaa',
                'price' => 19800000,
                'sale_price' => 11890000,
                'description' => 'CHẤT LIỆU TỦ BẾP Cánh tủ gỗ MFC dán Melamine chuẩn CARB P2 Thân tủ gỗ MFC phủ foil chuẩn CARB P2 Riêng thân tủ chậu rủ làm bằng Picomat chống nước.',
                'short_description' => 'Giá đã bao gồm tủ gỗ và mặt đá kim sa. Chất liệu chính:  - Cánh tủ: gỗ MFC phủ Melamine, dày 18mm, chuẩn CARB P2 - Thân tủ: gỗ MFC phủ foil, dày 18mm, chuẩn CARB P2 - Thân tủ chậu rửa: Picomat chống nước, dày 18mm. Bảo hành: 2 năm',
                'image' => 'images/product/product-9.webp',
                'instock' => 100,
                'category_id' => 5
            ],
            [
                'name' => 'Hệ tủ bếp Kitchen Premium Ubeda',
                'slug' => 'Hệ tủ bếp Kitchen Premium Ubeda',
                'price' => 20800000,
                'sale_price' => 11990000,
                'description' => 'CHẤT LIỆU TỦ BẾP Cánh tủ gỗ MFC dán Melamine chuẩn CARB P2 Thân tủ gỗ MFC phủ foil chuẩn CARB P2 Riêng thân tủ chậu rủ làm bằng Picomat chống nước.',
                'short_description' => 'Giá đã bao gồm tủ gỗ và mặt đá kim sa. Chất liệu chính:  - Cánh tủ: gỗ MFC phủ Melamine, dày 18mm, chuẩn CARB P2 - Thân tủ: gỗ MFC phủ foil, dày 18mm, chuẩn CARB P2 - Thân tủ chậu rửa: Picomat chống nước, dày 18mm. Bảo hành: 2 năm',
                'image' => 'images/product/product-10.webp',
                'instock' => 100,
                'category_id' => 5
            ],
            [
                'name' => 'Combo Basic Phòng Khách Grenaa',
                'slug' => 'Combo Basic Phòng Khách Grenaa',
                'price' => 8670000,
                'sale_price' => 5870000,
                'description' => 'Chi tiết nguyên vật liệu Với tiêu chí ưu tiên là bảo vệ môi trường và cung cấp những sản phẩm an toàn, tốt cho sức khỏe của con người, MOHO đã cân nhắc và chọn lọc sử dụng những nguyên liệu tốt nhất trong từng sản phẩm. Bộ sưu tập Grenaa được làm từ 2 nguyên liệu chính: gỗ công nghiệp MDF/ MFC phủ Melamine đạt chuẩn CARB P2 và gỗ cao su.  Gỗ công nghiệp MDF/ MFC phủ Melamine  Sử dụng Gỗ công nghiệp ván ép phủ Melamine vừa giúp bảo vệ môi trường, vừa tăng khả năng chống trầy xước mà vẫn đảm bảo kết cấu chắc chắn, bền bỉ cho sản phẩm. Đặc biệt, đạt tiêu chuẩn CARB P2 rất an toàn cho sức khỏe của bạn và gia đình.  Gỗ cao su Sử dụng gỗ cao su cho phần chân và khung giúp tăng khả năng chịu lực và độ bền cao hơn, dẻo dai hơn.  Gỗ công nghiệp Plywood Tất cả các phần tấm phản của giường, sofa, tựa lưng và mặt ngồi ghế ăn đều được sản xuất từ Plywood với độ dày 12 - 18 mm theo tiêu chuẩn CARB P2. Với tính thân thiện với môi trường, kết cấu bền bỉ, và khả năng chống ẩm xuất sắc, Plywood đảm bảo sức khỏe cho bạn và gia đình với khả năng chịu lực mạnh mẽ khi tấm phản giường có thể chịu trọng lượng lên đến 175kg trên diện tích 400 x 488 mm với nệm 15cm. Các sản phẩm từ Plywood khác đều có thể chịu trọng lượng hơn 70kg trên một diện tích đứng bất kỳ trực tiếp lên Plywood.  Đặc điểm chi tiết sản phẩm  Bộ sưu tập Grenaa sẽ đưa bạn đến một hành trình đầy ấn tượng giữa vẻ đẹp tinh tế và sự hiện đại tối giản của phong cách Scandinavian. Được truyền cảm hứng từ thị trấn Đan Mạch cùng tên, sự lạnh lẽo của thị trấn ven biển Baltic giá lạnh quanh năm đã được chuyển hóa thành sự tinh tế hiện đại trong các món đồ nội thất với màu sắc trầm lạnh.  Trong bộ sưu tập này, chúng tôi đã mang lại cho khách hàng một phong cách Scandinavian hoàn chỉnh, mang đậm đặc trưng của Đan Mạch nói riêng và các nước Bắc âu nói riêng. Toàn bộ sản phẩm mang tông màu tối lạnh của vùng biển Baltic, nhưng đã được chăm chút tỉ mỉ trong thiết kế khiến cho bộ sưu tập Grenaa vô cùng hài hòa không kém phần ấm áp.  Không những vậy, chúng tôi cũng đã tích hợp các công năng vào sản phẩm. Grenaa không chỉ hiện đại về mặt thiết kế mà còn cả khả năng sử dụng. Grenaa sẽ mang lại không gian sống nhẹ nhàng, gần gũi, nơi vẻ đẹp và sự đơn giản yên bình của ngôi nhà trở thành một.',
                'short_description' => 'Combo basic gồm: 1 Ghế Sofa: Dài 150 x Rộng 80 x Cao 70 cm  1 Bàn Sofa: Dài 70 x Rộng 50 x Cao 35 cm  1 Ghế đôn: Dài 40 x Rộng 40 x Cao 32 cm',
                'image' => 'images/product/product-11.webp',
                'instock' => 100,
                'category_id' => 6
            ],
            [
                'name' => 'Combo Basic Phòng Ăn Narvik',
                'slug' => 'Combo Basic Phòng Ăn Narvik',
                'price' => 7150000,
                'sale_price' => 5050000,
                'description' => 'Bộ sưu tập Narvik mang đậm vẻ đẹp và lịch sử của thị trấn Narvik cùng với phong cách nội thất ấm áp của Bắc Âu. Nó không chỉ lấy cảm hứng từ phong cách nội thất gỗ sáng điển hình của Na Uy mà còn từ lịch sử của thị trấn Narvik, tạo nên bộ sưu tập mang tên "Bí mật của Công Chúa Thụy Điển Victoria" với phong cách trang trí vĩnh cửu, luôn theo xu hướng và mang đậm vẻ thanh lịch hoàng gia của Bắc Âu. Màu tự nhiên: Màu gỗ nhẹ của các căn nhà gỗ tại Narvik lấy cảm hứng từ những ngôi nhà trên núi với tầm nhìn tuyệt vời, đặc biệt vào ban đêm với ánh sáng Bắc Cực tuyệt đẹp. Màu gỗ nhẹ phản chiếu tuyệt vời ánh sáng trong nhà vào ban đêm hoặc ban ngày, mang đến cảm giác ấm cúng theo phong cách Bắc Âu. Màu xám đá núi cho các bộ đồ nệm phản chiếu ánh đèn vào ban đêm, tạo cảm giác hiện đại cho ngôi nhà theo phong cách Bắc Âu. Màu Greige tôn vinh tủ quần áo, phản chiếu ánh sáng tự nhiên và đèn vào ban đêm, tạo nên không gian hiện đại và thanh lịch. Bàn ăn Narvik đơn giản nhưng tinh tế, phong cách hiện đại với kích thước phù hợp với căn hộ nhỏ. Với màu gỗ Dark Grey Barn Wood hoặc Light Cabin Wood và mặt melamine xám Greige, bàn ăn này không chỉ đẹp mắt mà còn chắc chắn và dễ chịu khi sử dụng hàng ngày. Ghế ăn Narvik được thiết kế đơn giản nhưng tinh tế, phù hợp với người Việt Nam với chiều cao và chiều sâu lý tưởng cho sự thoải mái khi ngồi lâu. Với màu gỗ Dark Grey Barn Wood hoặc Light Cabin Wood, ghế có kích thước và cấu trúc vững chắc, phù hợp với bàn ăn trong bộ sưu tập.',
                'short_description' => 'Combo basic gồm: 1 Bàn Ăn: Dài 120 x Rộng 75 x Cao 78 cm  4 Ghế Ăn: Dài 48 x Rộng 40 x Cao 80 cm',
                'image' => 'images/product/product-12.webp',
                'instock' => 100,
                'category_id' => 6
            ],


        ]);
    }
}
