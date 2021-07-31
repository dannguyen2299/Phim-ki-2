<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class movie extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('movie')->delete();
        DB::table('movie')->insert([
            ['movie_id' => 1, 'movie_name' => 'Bàn Tay Diệt Quỷ', 'year' => '2019', 'total_eps' => 16, 'introduce' => 'Phim kể về mối tình giữa T và Q', 'length' => '1:08:00', 'url_trailer' => 'https://www.youtube.com/embed/Ws-QlpSltr8', 'url_image' => 'https://www.cgv.vn/media/catalog/product/cache/1/small_image/190x260/052b7e4a4f6d2886829431e534ef7a43/b/t/btdq_main_poster_1.jpg', 'url_cmt_fb' => 'https://www.facebook.com/movie/group5/1', 'status' => 1, 'nation_id' => 1],
            ['movie_id' => 2, 'movie_name' => 'Palm Springs: Mở Mắt Thấy Hôm Qua', 'year' => '2020', 'total_eps' => 16, 'introduce' => 'Phim kể về mối tình giữa T và Q', 'length' => '1:08:00', 'url_trailer' => 'https://www.youtube.com/embed/Ws-QlpSltr8', 'url_image' => 'https://www.cgv.vn/media/catalog/product/cache/1/small_image/190x260/052b7e4a4f6d2886829431e534ef7a43/t/e/teaser_poster_1_1__1.jpg', 'url_cmt_fb' => 'https://www.facebook.com/movie/group5/2', 'status' => 1, 'nation_id' => 2],
            ['movie_id' => 3, 'movie_name' => 'Cục Nợ Hóa Cục Cưng', 'year' => '2021', 'total_eps' => 16, 'introduce' => 'Phim kể về mối tình giữa T và Q', 'length' => '1:08:00', 'url_trailer' => 'https://www.youtube.com/embed/Ws-QlpSltr8', 'url_image' => 'https://www.cgv.vn/media/catalog/product/cache/1/small_image/190x260/052b7e4a4f6d2886829431e534ef7a43/r/s/rsz_main_poster_cncc_1.jpg', 'url_cmt_fb' => 'https://www.facebook.com/movie/group5/3', 'status' => 1, 'nation_id' => 3],
            ['movie_id' => 4, 'movie_name' => 'Điệp Viên Siêu Lầy', 'year' => '2020', 'total_eps' => 16, 'introduce' => 'Phim kể về mối tình giữa T và Q', 'length' => '1:08:00', 'url_trailer' => 'https://www.youtube.com/embed/Ws-QlpSltr8', 'url_image' => 'https://www.cgv.vn/media/catalog/product/cache/1/small_image/190x260/052b7e4a4f6d2886829431e534ef7a43/m/a/main-poster_ms1_1.jpg', 'url_cmt_fb' => 'https://www.facebook.com/movie/group5/4', 'status' => 1, 'nation_id' => 4],
            ['movie_id' => 5, 'movie_name' => 'Chiến Binh Cuối Cùng: Cội Nguồn Của Qủy', 'year' => '2019', 'total_eps' => 16, 'introduce' => 'Phim kể về mối tình giữa T và Q', 'length' => '1:08:00', 'url_trailer' => 'https://www.youtube.com/embed/Ws-QlpSltr8', 'url_image' => 'https://www.cgv.vn/media/catalog/product/cache/1/small_image/190x260/052b7e4a4f6d2886829431e534ef7a43/p/o/poster-the-last-warrior_1__1.jpg', 'url_cmt_fb' => 'https://www.facebook.com/movie/group5/5', 'status' => 1, 'nation_id' => 5],
            ['movie_id' => 6, 'movie_name' => 'Thám Tử Lừng Danh Conan: Viên Đạn Đỏ', 'year' => '2018', 'total_eps' => 16, 'introduce' => 'Phim kể về mối tình giữa T và Q', 'length' => '1:08:00', 'url_trailer' => 'https://www.youtube.com/embed/Ws-QlpSltr8', 'url_image' => 'https://www.cgv.vn/media/catalog/product/cache/1/small_image/190x260/052b7e4a4f6d2886829431e534ef7a43/c/o/conan_24_-_main_poster_1__1.jpg', 'url_cmt_fb' => 'https://www.facebook.com/movie/group5/6', 'status' => 1, 'nation_id' => 1],
            ['movie_id' => 7, 'movie_name' => 'Trùm Cuối Siêu Đẳng', 'year' => '2020', 'total_eps' => 16, 'introduce' => 'Phim kể về mối tình giữa T và Q', 'length' => '1:08:00', 'url_trailer' => 'https://www.youtube.com/embed/Ws-QlpSltr8', 'url_image' => 'https://www.cgv.vn/media/catalog/product/cache/1/small_image/190x260/052b7e4a4f6d2886829431e534ef7a43/b/o/boss_level_-_payoff_poster_1__1.jpg', 'url_cmt_fb' => 'https://www.facebook.com/movie/group5/7', 'status' => 1, 'nation_id' => 3],
            ['movie_id' => 8, 'movie_name' => 'Ong Nhí Phiêu Lưu Ký: Giải Cứu Công Chúa Kiến', 'year' => '2017', 'total_eps' => 16, 'introduce' => 'Phim kể về mối tình giữa T và Q', 'length' => '1:08:00', 'url_trailer' => 'https://www.youtube.com/embed/Ws-QlpSltr8', 'url_image' => 'https://www.cgv.vn/media/catalog/product/cache/1/small_image/190x260/052b7e4a4f6d2886829431e534ef7a43/m/a/main_poster_mtb_1__1.jpg', 'url_cmt_fb' => 'https://www.facebook.com/movie/group5/8', 'status' => 1, 'nation_id' => 2],

            // Thêm mới
            //Phim Bộ
            [
                'movie_id' => 9,
                'movie_name' => 'Đạo Mộ Bút Kí : Vấn Đỉnh Thiên Cung',
                'year' => '2021',
                'total_eps' => 24,
                'introduce' => 'Wu Xie, Zhang Qi Ling và Wang Pang Zi thấy mình trên một chuyến tàu hướng đến biên giới miền núi Triều Tiên để tìm kiếm một cung điện huyền bí, thần thoại trong một thế giới của sông băng, tuyết lở và bão tuyết. Họ không biết tại sao Wu San Sheng lại gửi tin nhắn đưa họ đến với nhau, nhưng họ sớm phát hiện ra rằng họ không đơn độc trong cuộc tìm kiếm đỉnh cao đónắm giữ cung điện, Ning ở trên cùng một con đường với một đội người nước ngoài.',
                'length' => '00:45:00',
                'url_trailer' => 'https://www.youtube.com/embed/gvAJ9KKHols',
                'url_image' => 'https://static.247phim.com/162488/conversions/60ee54389148c_dao-190_274.jpg',
                'url_cmt_fb' => 'https://www.facebook.com/movie/group5/9',
                'status' => 1,
                'nation_id' => 3
            ],

            [
                'movie_id' => 10,
                'movie_name' => 'Khi Em Mỉm Cười Rất Đẹp',
                'year' => '2021',
                'total_eps' => 31,
                'introduce' => 'Khi Em Mỉm Cười Rất Đẹp là bộ phim có đề tài eSports xoay quanh câu chuyện tình yêu oan gia giữa Lục Tư Thành (Hứa Khải) và Đồng Dao (Trình Tiêu). Phim bắt đầu từ lúc Đồng Dao trở thành một tuyển thủ eSports nữ đầu tiên thi đấu chuyên nghiệp toàn Trung Quốc, mặc dù phải đối đầu với vô số nghi ngờ, nhưng cô vẫn luôn mạnh mẽ dùng thực lực để chứng minh sự tài giỏi của mình. Cuối cùng, cô và Lục Tư Thành có hoàn thành được mục tiêu giành chiến thắng ở giải Quốc Tế không?',
                'length' => '00:45:00',
                'url_trailer' => 'https://www.youtube.com/embed/8yNwkwU8ABM',
                'url_image' => 'https://static.247phim.com/162395/conversions/60dd2df435ff2_photo-1-1624510651030407838890-190_274.jpg',
                'url_cmt_fb' => 'https://www.facebook.com/movie/group5/10',
                'status' => 1,
                'nation_id' => 3
            ],

            [
                'movie_id' => 11,
                'movie_name' => ' Quyến Tư Lượng (PHẦN 1)',
                'year' => '2021',
                'total_eps' => 15,
                'introduce' => 'Khám phá câu chuyện về thiếu niên Thần tộc cùng thiếu nữ phàm nhân trên tiên đảo dị giới, giấc mộng phương Đông lộng lẫy, từng bước kinh tâm mà tiềm tàng nguy hiểm.',
                'length' => '00:25:00',
                'url_trailer' => 'https://www.youtube.com/embed/5fi7V1g6cLE',
                'url_image' => 'https://static.247phim.com/162291/conversions/60d198222b1ab_2021-06-22-2.55.00-PM-190_274.jpg',
                'url_cmt_fb' => 'https://www.facebook.com/movie/group5/11',
                'status' => 1,
                'nation_id' => 3
            ],

            [
                'movie_id' => 12,
                'movie_name' => 'Phong Bạo Vũ',
                'year' => '2021',
                'total_eps' => 43,
                'introduce' => 'Phong Bạo Vũ kể về Lý Tuấn Kiệt là nhân viên của một công ty an ninh thông tin, trong khi thực hiện nhiệm vụ, anh phát hiện nội bộ công ty và một thế lực đen tối có liên hệ với nhau, dưới sự trợ giúp của đội trưởng đội hành động Chu Tử Huyên, hai người cùng hợp sức thâm nhập điều tra, trong qua trình điều tra không ngừng bị các thế lực hãm hại, truy bắt. Cuối cùng bí mật cũng dần dần được phơi bày.',
                'length' => '1:00:00',
                'url_trailer' => 'https://www.youtube.com/embed/LWz-pj7lD_0',
                'url_image' => 'https://static.247phim.com/161906/conversions/6092137c5ffb4_phongbao-d-190_274.jpg',
                'url_cmt_fb' => 'https://www.facebook.com/movie/group5/12',
                'status' => 1,
                'nation_id' => 3
            ],

            [
                'movie_id' => 13,
                'movie_name' => 'Thiên Bảo Phục Yêu Lục',
                'year' => '2021',
                'total_eps' => 16,
                'introduce' => 'Cốt truyện trong phim Thiên Bảo Phục Yêu Lục kể về năm Thiên Bảo thứ 12, cùng lúc đó xuất hiện một thiếu niên tự xưng là Hồng Tuấn, bản thân là một người không rành thế sự, anh được giao cho ba trọng trách rời khỏi Diệu Kim cung núi Thái Hành, đến với chốn phồn hoa cẩm tú Trường An. ',
                'length' => '00:25:00',
                'url_trailer' => 'https://www.youtube.com/embed/Wwmud13wgXw',
                'url_image' => 'https://static.247phim.com/161887/conversions/6090f5220ce55_Legend-Of-Exorcism-2020-190_274.jpg',
                'url_cmt_fb' => 'https://www.facebook.com/movie/group5/13',
                'status' => 1,
                'nation_id' => 3
            ],

            [
                'movie_id' => 14,
                'movie_name' => 'Họa Giang Hồ Chi Bất Lương Nhân (Phần 4)',
                'year' => '2021',
                'total_eps' => 13,
                'introduce' => 'Thập Vạn Đại Sơn nguy cơ tứ bề, chuyến đi Nhiêu Cương gian nan trắc trở. Thập Nhị Động có bí mật gì không thể để người khác biết? Đối diện với các thế lực lớn mạnh, đám người Lý Tinh Vân có thể toàn vẹn rút lui? Chuyến đi Nhiêu Cương thần bí khó lường này sắp sửa khởi hành...',
                'length' => '00:30:00',
                'url_trailer' => 'https://www.youtube.com/embed/wdEU4yB3rhQ',
                'url_image' => 'https://static.247phim.com/161892/conversions/609107add61b7_2kt251f2zqc-190_274.jpg',
                'url_cmt_fb' => 'https://www.facebook.com/movie/group5/14',
                'status' => 1,
                'nation_id' => 3
            ],

            [
                'movie_id' => 15,
                'movie_name' => 'Thế Giới Hoàn Mỹ',
                'year' => '2021',
                'total_eps' => 42,
                'introduce' => 'Thập Vạn Đại Sơn nguy cơ tứ bề, chuyến đi Nhiêu Cương gian nan trắc trở. Thập Nhị Động có bí mật gì không thể để người khác biết? Đối diện với các thế lực lớn mạnh, đám người Lý Tinh Vân có thể toàn vẹn rút lui? Chuyến đi Nhiêu Cương thần bí khó lường này sắp sửa khởi hành...',
                'length' => '00:20:00',
                'url_trailer' => 'https://www.youtube.com/embed/6Qs-L2FT2Vw',
                'url_image' => 'https://static.247phim.com/161787/conversions/60868e5bd17c5_wanmeishijie-d-190_274.jpg',
                'url_cmt_fb' => 'https://www.facebook.com/movie/group5/15',
                'status' => 1,
                'nation_id' => 3
            ],

            [
                'movie_id' => 16,
                'movie_name' => 'Trường Ca Hành',
                'year' => '2021',
                'total_eps' => 49,
                'introduce' => 'Bộ phim cổ trang Trường Ca Hành được chuyển thể từ tác phẩm truyện tranh cùng tên của tác giả Hạ Đạt. Bộ phim đánh giá cao với dàn diễn viên đình đám, được yêu thích của màn ảnh Trung Quốc như: Địch Lệ Nhiệt Ba, Ngô Lỗi, Triệu Lộ Tư, Lưu Vũ Ninh,...',
                'length' => '00:45:00',
                'url_trailer' => 'https://www.youtube.com/embed/mblg0FOYBb8',
                'url_image' => 'https://static.247phim.com/161384/conversions/606575ec7aa29_the-long-ballad-d-190_274.jpg',
                'url_cmt_fb' => 'https://www.facebook.com/movie/group5/16',
                'status' => 1,
                'nation_id' => 3
            ],

            [
                'movie_id' => 17,
                'movie_name' => 'Mộ Chi Vương',
                'year' => '2021',
                'total_eps' => 32,
                'introduce' => 'Truyền thuyết kể rằng Lạc Vũ Tử giúp Tần Thủy Hoàng xây Thủy Hoàng Lăng, lại gặp được chín ngôi kỳ mộ chứa đầy kỳ trân dị bảo, được Tần Thủy Hoàng phong làm Mộ vương, thành lập Mộ phái, phụ trách xây sửa vào bảo vệ lăng mộ hoàng gia.',
                'length' => '00:45:00',
                'url_trailer' => 'https://www.youtube.com/embed/buBXKOY5lgM',
                'url_image' => 'https://static.247phim.com/160847/conversions/6046fe4e11254_poster.medium-190_274.jpg',
                'url_cmt_fb' => 'https://www.facebook.com/movie/group5/17',
                'status' => 1,
                'nation_id' => 3
            ],

            [
                'movie_id' => 18,
                'movie_name' => 'Thiên Nhai Khách',
                'year' => '2021',
                'total_eps' => 32,
                'introduce' => 'Thủ lĩnh Thiên Song Chu Tử Thư vì mưu cầu tự do, không tiếc dùng mạng để rời khỏi tổ chức, lúc mạng sống không còn lâu gặp được Ôn Khách Hành cốc chủ Quỷ Cốc một lòng muốn tiêu diệt thế gian. ',
                'length' => '00:45:00',
                'url_trailer' => 'https://www.youtube.com/embed/x6k9AMoCxzg',
                'url_image' => 'https://static.247phim.com/160510/conversions/60346b8a49416_eq23-190_274.jpg',
                'url_cmt_fb' => 'https://www.facebook.com/movie/group5/18',
                'status' => 1,
                'nation_id' => 3
            ],

            // Phim Lẻ
            [
                'movie_id' => 19,
                'movie_name' => 'Hóa Trang',
                'year' => '2021',
                'total_eps' => 1,
                'introduce' => 'Một cô gái trẻ phải vật lộn để tồn tại sau khi một nhóm người đột nhập vào nhà cô để lấy cắp tác phẩm nghệ thuật vô giá của gia đình cô...',
                'length' => '1:20:00',
                'url_trailer' => 'https://www.youtube.com/embed/GMeF53FEMcs',
                'url_image' => 'https://static.247phim.com/162574/conversions/60fe61bfbf16b_hoa-190_274.jpg',
                'url_cmt_fb' => 'https://www.facebook.com/movie/group5/19',
                'status' => 1,
                'nation_id' => 2
            ],

            [
                'movie_id' => 20,
                'movie_name' => 'Chiến Dịch Đặc Biệt: Tấn Công Đền Thờ',
                'year' => '2021',
                'total_eps' => 1,
                'introduce' => 'Lấy cảm hứng từ những sự kiện có thật, bộ phim kể lại câu chuyện anh hùng của những người lính biệt kích NSG, những người đã bước vào để cứu những người vô tội khi những kẻ khủng bố tấn công một ngôi đền ở Gujarat.',
                'length' => '1:30:00',
                'url_trailer' => 'https://www.youtube.com/embed/GMeF53FEMcs',
                'url_image' => 'https://static.247phim.com/162550/conversions/60fa2d30a237e_den-190_274.jpg',
                'url_cmt_fb' => 'https://www.facebook.com/movie/group5/20',
                'status' => 1,
                'nation_id' => 2
            ],

            [
                'movie_id' => 21,
                'movie_name' => 'Vương Triều Xác Sống: Ashin Phương Bắc',
                'year' => '2021',
                'total_eps' => 1,
                'introduce' => 'Vương Triều Xác Sống: Ashin Phương Bắc trong tập đặc biệt này của "Vương Triều Xác Sống", bi kịch, phản bội và một phát hiện bí ẩn thúc đẩy một phụ nữ báo thù cho cả gia đình và bộ tộc của nàng.',
                'length' => '1:25:00',
                'url_trailer' => 'https://www.youtube.com/embed/GMeF53FEMcs',
                'url_image' => 'https://static.247phim.com/162527/conversions/60f6856f42c27_king-190_274.jpg',
                'url_cmt_fb' => 'https://www.facebook.com/movie/group5/21',
                'status' => 1,
                'nation_id' => 5
            ],

            [
                'movie_id' => 22,
                'movie_name' => 'Quỷ Họa Hồ',
                'year' => '2021',
                'total_eps' => 1,
                'introduce' => 'Phim kể rằng Tang Tử Minh sau khi đề tên bảng vàng đã trở lại quê cũ trần Kỳ Lân, muốn tìm người yêu Liên Hương để thành thân, cũng mang theo nhiệm vụ bí mật là tìm kiếm Ngọc Châu Kỳ Lân, điều tra xem vụ án mất tích liệu có liên quan đến Hồ yêu trong lời đồn hay không',
                'length' => '1:25:00',
                'url_trailer' => 'https://www.youtube.com/embed/GMeF53FEMcs',
                'url_image' => 'https://static.247phim.com/162471/conversions/60eb8771862b8_hoaho-190_274.jpg',
                'url_cmt_fb' => 'https://www.facebook.com/movie/group5/22',
                'status' => 1,
                'nation_id' => 3
            ],

            [
                'movie_id' => 23,
                'movie_name' => 'Thảm Họa Chernobyl',
                'year' => '2021',
                'total_eps' => 1,
                'introduce' => 'Phim kể rằng Tang Tử Minh sau khi đề tên bảng vàng đã trở lại quê cũ trần Kỳ Lân, muốn tìm người yêu Liên Hương để thành thân, cũng mang theo nhiệm vụ bí mật là tìm kiếm Ngọc Châu Kỳ Lân, điều tra xem vụ án mất tích liệu có liên quan đến Hồ yêu trong lời đồn hay không',
                'length' => '2:25:00',
                'url_trailer' => 'https://www.youtube.com/embed/s9APLXM9Ei8',
                'url_image' => 'https://static.247phim.com/162475/conversions/60ebb5a3da958_tham-190_274.jpg',
                'url_cmt_fb' => 'https://www.facebook.com/movie/group5/23',
                'status' => 1,
                'nation_id' => 2
            ],

            [
                'movie_id' => 24,
                'movie_name' => 'Thiếu Tá Grom: Bác Sĩ Bệnh Dịch',
                'year' => '2021',
                'total_eps' => 1,
                'introduce' => 'Major Grom: Plague Doctor (2021) bắt đầu từ khi một tên hiệp khách đeo mặt nạ đã gây ra một loạt các án mạng trong thành phố, dấy lên cuộc hỗn loạn chưa từng có. Nổi giận trước hành động xem trời bằng vung của hắn, một vị thanh tra cùng với người cộng sự của anh bắt tay vào việc truy lùng tên sát nhân kia.',
                'length' => '2:25:00',
                'url_trailer' => 'https://www.youtube.com/embed/xkhJqHJEkgA',
                'url_image' => 'https://static.247phim.com/162454/conversions/60e6671a6dc33_may-190_274.jpg',
                'url_cmt_fb' => 'https://www.facebook.com/movie/group5/24',
                'status' => 1,
                'nation_id' => 2
            ],

            [
                'movie_id' => 25,
                'movie_name' => 'Người Dơi: Đêm Halloween (Phần 1)',
                'year' => '2021',
                'total_eps' => 1,
                'introduce' => 'Đêm trường Halloween là một phần khác của Vũ trụ Hoạt hình DC, dựa trên những câu chuyện phong phú về lịch sử của Người Dơi. Là phần tiếp theo của Batman: Year One, đây là một Bat-man trong quá trình chuyển đổi.',
                'length' => '1:25:00',
                'url_trailer' => 'https://www.youtube.com/embed/5CVpAOdcmGQ',
                'url_image' => 'https://static.247phim.com/162445/conversions/60e50964c7a8a_batman-190_274.jpg',
                'url_cmt_fb' => 'https://www.facebook.com/movie/group5/25',
                'status' => 1,
                'nation_id' => 2
            ],

            [
                'movie_id' => 26,
                'movie_name' => 'Thám Tử Phố Tàu (Phần 3)',
                'year' => '2021',
                'total_eps' => 1,
                'introduce' => 'Nhóm thám tử phố Tàu Tần Phong do Lưu Hạo Nhiên đóng và Đường Nhân Vương Bảo Cường đóng sẽ tiếp tục chiến đấu ở Tokyo sau cuộc bạo loạn ở Bangkok và New York! ',
                'length' => '1:25:00',
                'url_trailer' => 'https://www.youtube.com/embed/oQDIT1xz0-I',
                'url_image' => 'https://static.247phim.com/162435/conversions/60e3be236161c_detective-190_274.jpg',
                'url_cmt_fb' => 'https://www.facebook.com/movie/group5/26',
                'status' => 1,
                'nation_id' => 3
            ],

            [
                'movie_id' => 27,
                'movie_name' => 'Cuộc Chiến Tương Lai',
                'year' => '2021',
                'total_eps' => 1,
                'introduce' => 'The Tomorrow War (2021) có sự tham gia của Chris Pratt trong vai nam chính. Tài tử sinh năm 1979 hóa thân thành Dan Forester – giáo viên trung học được nhóm chiến binh từ tương lai chiêu mộ để tham gia bảo vệ Trái Đất khỏi sự xâm lăng của sinh vật ngoài hành tinh.  ',
                'length' => '1:25:00',
                'url_trailer' => 'https://www.youtube.com/embed/qwEBnFPvmbY',
                'url_image' => 'https://static.247phim.com/162414/conversions/60e2757adfd2c_5675685214852-190_274.jpg',
                'url_cmt_fb' => 'https://www.facebook.com/movie/group5/27',
                'status' => 1,
                'nation_id' => 2
            ],

            [
                'movie_id' => 28,
                'movie_name' => 'Sự Hành Động Chống Đua Xe',
                'year' => '2021',
                'total_eps' => 1,
                'introduce' => 'Xoay quanh câu chuyện về những người cảnh sát mở cuộc truy đuổi những kẻ đua xe trái phép trên quy mô lớn. Băng nhóm này đã làm rối loạn trật tự xã hội ảnh hưởng đến cuộc sống người dân. Các cảnh sát phải ráo riết truy đuổi bọn chúng trước khi sự việc ngày càng nghiêm trọng.',
                'length' => '1:25:00',
                'url_trailer' => 'https://www.youtube.com/embed/AHACGuaZqt8',
                'url_image' => 'https://static.247phim.com/162413/conversions/60e26e14354a3_du-190_274.jpg',
                'url_cmt_fb' => 'https://www.facebook.com/movie/group5/28',
                'status' => 1,
                'nation_id' => 3
            ],

            //Phim Hoạt Hình

            [
                'movie_id' => 29,
                'movie_name' => 'Naruto (Phần 2)',
                'year' => '2007',
                'total_eps' => 80,
                'introduce' => 'Naruto: Shippuden (tạm dịch: Naruto: Cuộc phiêu lưu Gió xoáy) là bộ anime nối tiếp với bộ anime Naruto phần đầu, tương ứng từ tập 28 trong Manga Naruto trở đi.Naruto phần hai tiếp tục câu chuyện về cậu bé Naruto sau 3 năm tu luyện cùng Jiraiya nay đã trở về làng',
                'length' => '00:24:00',
                'url_trailer' => 'https://www.youtube.com/embed/YKSNBIlM_bY',
                'url_image' => 'https://static.247phim.com/155970/conversions/5f8d38a19d96c_naruto-shippuden-d-190_274.jpg',
                'url_cmt_fb' => 'https://www.facebook.com/movie/group5/29',
                'status' => 1,
                'nation_id' => 4
            ],

            [
                'movie_id' => 30,
                'movie_name' => 'Vua Trò Chơi Yu-Gi-Oh',
                'year' => '2008',
                'total_eps' => 69,
                'introduce' => 'Vua trò chơi Yugi Oh là bộ phim hoạt hình dựa trên nguyên tác nổi tiếng của nhà văn Nhật Bản Kazuki Takahashi, do hãng phim Studio Gallop phát hành. Phần lớn bộ phim tập trung vào trò chơi hư cấu gọi là Duel Monster (Quái vật đối kháng), trong đó các nhân vật sử dụng các lá bài để đấu (duel) bằng các “quái vật” giả lập.',
                'length' => '00:24:00',
                'url_trailer' => 'https://www.youtube.com/embed/4oVRI82UzTw',
                'url_image' => 'https://static.247phim.com/145723/conversions/18661_yu-gi-oh-duel-monsters_photo_portrait-190_274.jpg',
                'url_cmt_fb' => 'https://www.facebook.com/movie/group5/30',
                'status' => 1,
                'nation_id' => 4
            ],

            [
                'movie_id' => 31,
                'movie_name' => 'Thám Tử Lừng Danh Conan (Phần 1)',
                'year' => '2008',
                'total_eps' => 67,
                'introduce' => 'Mở đầu câu truyện, cậu học sinh trung học 17 tuổi (trong truyện tranh là 16) Shinichi Kudo (Jimmy Kudo) bị biến thành cậu bé Conan Edogawa. Shinichi trong phần đầu của Thám tử lừng danh Conan được miêu tả là một thám tử học đường. Trong một lần đi chơi công viên "Miền Nhiệt đới" với cô bạn từ thuở nhỏ (cũng là bạn gái) Ran Mori (Rachel Moore), cậu bị dính vào vụ án một hành khách trên Chuyến tàu tốc hành trong công viên, Kishida (Kenneth), bị giết trong một vụ án cắt đầu rùng rợn.',
                'length' => '00:24:00',
                'url_trailer' => 'https://www.youtube.com/embed/kOh1OTokLCk',
                'url_image' => 'https://static.247phim.com/162218/conversions/60c1cb6c93c7c_conan-190_274.jpg',
                'url_cmt_fb' => 'https://www.facebook.com/movie/group5/31',
                'status' => 1,
                'nation_id' => 4
            ],

            [
                'movie_id' => 32,
                'movie_name' => 'Chiến Sĩ Cơ Động Gundam: Tia Chớp',
                'year' => '2021',
                'total_eps' => 30,
                'introduce' => 'Sau cuộc nổi loạn của Char, Hathaway Noa lãnh đạo cuộc nổi dậy chống Liên bang Địa Cầu, song việc gặp một sĩ quan kẻ thù và một phụ nữ bí ẩn thay đổi số phận của anh.',
                'length' => '01:36:00',
                'url_trailer' => 'https://www.youtube.com/embed/xM2q0FQepXQ',
                'url_image' => 'https://static.247phim.com/162420/conversions/60e2870ac338e_ti-190_274.jpg',
                'url_cmt_fb' => 'https://www.facebook.com/movie/group5/32',
                'status' => 1,
                'nation_id' => 4
            ],

            [
                'movie_id' => 333,
                'movie_name' => 'Đấu Phá Thương Khung (Phần 4)',
                'year' => '2021',
                'total_eps' => 24,
                'introduce' => 'Đấu Phá Thương Khung (Phần 4) kể về Tiêu Viêm vì muốn đánh thức dược lão, đến Đế Đô tham gia đại hội luyện dược sư, nhưng cũng vì thực lực quá nổi bật mà bị kẻ thù ám toán, trong thời khắc nguy cấp, Tiêu Viêm điên cuồng nỗ lực đạt được quán quân, bảo vệ tôn nghiêm của đế quốc Gia Mã, Sau khi gỡ bỏ gánh nặng trong lòng, cũng là lúc nghênh tiếp hẹn ước ba năm sắp tới',
                'length' => '01:36:00',
                'url_trailer' => 'https://www.youtube.com/embed/7V41YyK9AVM',
                'url_image' => 'https://static.247phim.com/162018/conversions/609b9f06cc5b4_daupha-d-190_274.jpg',
                'url_cmt_fb' => 'https://www.facebook.com/movie/group5/33',
                'status' => 1,
                'nation_id' => 3
            ],

            [
                'movie_id' => 34,
                'movie_name' => 'Biệt Đội Nhân Bản Đặc Nhiệm',
                'year' => '2021',
                'total_eps' => 16,
                'introduce' => 'The Bad Batch là một đội đặc biệt được biến đổi gene để có khả năng đặc biệt hơn người bình thường. Đội này chuyên thực hiện những nhiệm vụ đặc biệt mà thậm chí Jedi mới có thể làm, thường những nhiệm vụ này là quá khó khăn cho các Clone - người nhân bản bình thường. Trong phần 7 vừa rồi, The Bad Batch đã xuất hiện để hỗ trợ Anakin và Rex cứu lấy Echo. Tuy nhiên vì khác biệt với phần còn lại nên Echo đã gia nhập đội The Bad Batch.',
                'length' => '01:36:00',
                'url_trailer' => 'https://www.youtube.com/embed/wTocfidgp0I',
                'url_image' => 'https://static.247phim.com/161916/conversions/6092521155fff_Star-Wars-The-Bad-Batch-Poster-Ky-Art-Disney-TV-Series-190_274.jpg',
                'url_cmt_fb' => 'https://www.facebook.com/movie/group5/34',
                'status' => 1,
                'nation_id' => 4
            ],

            [
                'movie_id' => 35,
                'movie_name' => 'Vạn Giới Độc Tôn',
                'year' => '2021',
                'total_eps' => 20,
                'introduce' => 'Vào một ngày đẹp trời, Lâm Phong đang ngưng tụ vũ hồn của mình, thật không may, khi hắn chỉ mới hóa hình Vũ Hồn Kiếm, vị hôn thê Cơ Mạn Yêu đã nhân lúc đó mà cướp lấy vũ hồn của hắn, còn đánh hắn hộc máu. Đồng thời lúc này, ý thức của Lâm Phong đã rơi vào 1 nơi tên Táng Thần Chi Địa, cô gái ở nơi này nói cho Lâm Phong biết rằng hắn có thể luyện hóa hết những tàn hồn của các vị thần bị nhốt ở đây rồi từ đó có được 1 ít sức mạnh và ý thức của họ.',
                'length' => '01:36:00',
                'url_trailer' => 'https://www.youtube.com/embed/9nChYC3rkfQ',
                'url_image' => 'https://static.247phim.com/161546/conversions/6073cb06bc9fe_van-gioi-doc-ton-d-190_274.jpg',
                'url_cmt_fb' => 'https://www.facebook.com/movie/group5/35',
                'status' => 1,
                'nation_id' => 3
            ],

            [
                'movie_id' => 36,
                'movie_name' => 'Sơn Hà Kiếm Tâm',
                'year' => '2021',
                'total_eps' => 43,
                'introduce' => 'Sơn Hà Kiếm Tâm - Thousand Autumns (2021) được cải biên từ tiểu thuyết đam mỹ của tác giả Mộng Khê Thạch. Nội dung phim xoay quanh việc tông chủ Yến Vô Sư “nhặt được” chưởng môn Thẩm Kiều. Một người một lòng theo đuổi võ học tối cao, tùy tâm tùy ý, một người yêu ghét phân minh, không muốn thấy cảnh chiến tranh loạn lạc, khi ở bên nhau họ sẽ như thế nào đây?',
                'length' => '00:20:00',
                'url_trailer' => 'https://www.youtube.com/embed/AegFYRmrplw',
                'url_image' => 'https://static.247phim.com/160715/conversions/603dc2bd26d6d_sonha0d-190_274.jpg',
                'url_cmt_fb' => 'https://www.facebook.com/movie/group5/36',
                'status' => 1,
                'nation_id' => 3
            ],

            [
                'movie_id' => 37,
                'movie_name' => 'Đảo Hải Tặc 10: Thế Giới Sức Mạnh',
                'year' => '2021',
                'total_eps' => 1,
                'introduce' => 'Câu chuyện bắt đầu từ một nhân vật, "Golden Leo" - Shiki. Shiki vốn là một hải tặc vĩ đại sánh ngang tầm với Roger - "Vua hải tặc". Trong suốt cuộc đời, Shiki luôn thích làm những "điều vĩ đại và đáng sợ". Shiki và Roger từng trải qua nhiều trận thư hùng làm chấn động biển khơi trước khi Roger tự nộp mình cho hải quân.',
                'length' => '01:20:00',
                'url_trailer' => 'https://www.youtube.com/embed/n6gpSUZsKew',
                'url_image' => 'https://static.247phim.com/133144/conversions/8234_one-piece-strong-world-2009_photo_portrait-190_274.jpg',
                'url_cmt_fb' => 'https://www.facebook.com/movie/group5/37',
                'status' => 1,
                'nation_id' => 4
            ],

            [
                'movie_id' => 38,
                'movie_name' => 'Duy Ngã Độc Thần',
                'year' => '2021',
                'total_eps' => 43,
                'introduce' => 'Bắt đầu trên vùng đất rộng lớn của Trung Quốc. Vị thần nắm giữ Quy luật của trời đất đã qua đời và mất đi quy luật Bị ràng buộc, sức mạnh của bóng tối sẵn sàng di chuyển, cố gắng lật đổ toàn bộ vùng đất.Ninh Thần là một người bảo vệ bình thường ở Cung điện Canglan',
                'length' => '00:20:00',
                'url_trailer' => 'https://www.youtube.com/embed/L8z1bh7DSlM',
                'url_image' => 'https://static.247phim.com/162504/conversions/60f139c91b4ca_duy-190_274.jpg',
                'url_cmt_fb' => 'https://www.facebook.com/movie/group5/38',
                'status' => 1,
                'nation_id' => 3
            ],

            //Phim Chiến Tranh

            [
                'movie_id' => 39,
                'movie_name' => 'Quân Trang Thân Yêu',
                'year' => '2021',
                'total_eps' => 36,
                'introduce' => '​Quân Trang Thân Yêu kể về một nhóm người với những lý tưởng và mục tiêu khác nhau gặp gỡ, vì đại nghĩa cùng nhau nắm tay tiến lên.',
                'length' => '00:45:00',
                'url_trailer' => 'https://www.youtube.com/embed/t6lhZ_J_HTo',
                'url_image' => 'https://static.247phim.com/162150/conversions/60b702c9e53d3_BnOKV_4f-190_274.jpg',
                'url_cmt_fb' => 'https://www.facebook.com/movie/group5/39',
                'status' => 1,
                'nation_id' => 3
            ],

            [
                'movie_id' => 40,
                'movie_name' => 'Vùng Chiến Sự Hiểm Nguy',
                'year' => '2021',
                'total_eps' => 1,
                'introduce' => '​Trong tương lai gần, một phi công máy bay không người lái được cử đến một vùng chiến sự thấy mình được ghép nối với một sĩ quan Android tối mật trong nhiệm vụ ngăn chặn một cuộc tấn công hạt nhân.',
                'length' => '01:45:00',
                'url_trailer' => 'https://www.youtube.com/embed/AFx6L1IgTkU',
                'url_image' => 'https://static.247phim.com/160152/conversions/60053241eafb7_MV5BNmM2MWQ0NzktNzU0OS00MjYzLTkxNDYtMzliNTA5ZmNkMmZlXkEyXkFqcGdeQXVyMDM2NDM2MQ%40%40._V1_-190_274.jpg',
                'url_cmt_fb' => 'https://www.facebook.com/movie/group5/40',
                'status' => 1,
                'nation_id' => 2
            ],

            [
                'movie_id' => 41,
                'movie_name' => 'Lính Đánh Thuê',
                'year' => '2021',
                'total_eps' => 1,
                'introduce' => '​Maxx là một lính lê dương biến thành lính đánh thuê. Khi một nhiệm vụ ở Nam Mỹ gặp trục trặc, Maxx bị bỏ mặc cho đến chết, nhưng anh ta được chăm sóc sức khỏe và tái sinh với một cách nhìn mới về cuộc sống. Anh ta cố gắng sống yên tĩnh trong giới hạn của niềm tin mới của mình được bao quanh bởi những người bạn mới của anh ta tại một nhà thờ.',
                'length' => '01:31:00',
                'url_trailer' => 'https://www.youtube.com/embed/Q4i2TgR4158',
                'url_image' => 'https://static.247phim.com/160592/conversions/60371d2d797df_81-E0frvjML._SL1500_-190_274.jpg',
                'url_cmt_fb' => 'https://www.facebook.com/movie/group5/41',
                'status' => 1,
                'nation_id' => 2
            ],

            [
                'movie_id' => 42,
                'movie_name' => 'Thế Chiến',
                'year' => '2021',
                'total_eps' => 1,
                'introduce' => 'Bộ phim "1917" kể về hai binh sĩ Anh trong Chiến tranh Thế giới thứ nhất (do George MacKay và Dean-Charles Chapman thủ vai). Họ được trao nhiệm vụ dường như bất khả thi, đó là gửi một bức thư cảnh báo mai phục.',
                'length' => '01:59:00',
                'url_trailer' => 'https://www.youtube.com/embed/U1LUS_4rHAE',
                'url_image' => 'https://static.247phim.com/134657/conversions/8739_1917-2019_photo_portrait-190_274.jpg',
                'url_cmt_fb' => 'https://www.facebook.com/movie/group5/42',
                'status' => 1,
                'nation_id' => 2
            ],

            [
                'movie_id' => 43,
                'movie_name' => 'Tiền Đồn',
                'year' => '2021',
                'total_eps' => 1,
                'introduce' => 'HE OUTPOST: Một nhóm nhỏ lính Mỹ chiến đấu chống lại hàng trăm chiến binh Taliban ở Afghanistan.',
                'length' => '02:10:00',
                'url_trailer' => 'https://www.youtube.com/embed/jdoqS9E3auw',
                'url_image' => 'https://static.247phim.com/148618/conversions/5f054a93d230b_outpost-final-190_274.jpg',
                'url_cmt_fb' => 'https://www.facebook.com/movie/group5/43',
                'status' => 1,
                'nation_id' => 2
            ],

            [
                'movie_id' => 44,
                'movie_name' => 'TRẬN CHIẾN MIDWAY',
                'year' => '2021',
                'total_eps' => 1,
                'introduce' => 'Trận chiến của Bulge. Trung úy Robert Cappa và trung đội lính của Sư đoàn Bộ binh số 2 phải bảo vệ một kho tiếp liệu quan trọng khỏi bị đánh chiếm bởi những người lính Đức tấn công. Với kẻ thù …',
                'length' => '01:25:00',
                'url_trailer' => 'https://www.youtube.com/embed/G7Wp1ACgN0E',
                'url_image' => 'https://static.247phim.com/159365/conversions/5fdc37dbcbeca_sgaaa-190_274.jpg',
                'url_cmt_fb' => 'https://www.facebook.com/movie/group5/44',
                'status' => 1,
                'nation_id' => 2
            ],

            [
                'movie_id' => 45,
                'movie_name' => 'Người Giải Phóng (Phần 1)',
                'year' => '2021',
                'total_eps' => 4,
                'introduce' => 'Câu chuyện có thật về một trong những trận chiến đẫm máu nhất trong Thế chiến II.',
                'length' => '00:45:00',
                'url_trailer' => 'https://www.youtube.com/embed/G7Wp1ACgN0E',
                'url_image' => 'https://static.247phim.com/157237/conversions/5facb61a8490e_The-Liberator-d-190_274.jpg',
                'url_cmt_fb' => 'https://www.facebook.com/movie/group5/45',
                'status' => 1,
                'nation_id' => 2
            ],

            [
                'movie_id' => 46,
                'movie_name' => 'Trận Chiến Ở Jangsari',
                'year' => '2021',
                'total_eps' => 1,
                'introduce' => 'THE BATTLE OF JANGSARI : Bộ phim đưa chúng ta lên tàu Munsan vào ngày 15 tháng 9 năm 1950, ở đỉnh cao của Chiến tranh Triều Tiên. Đại úy Lee Myeong-jun (Kim Myung-min) và đội quân gồm 772 binh sĩ sinh viên của anh ta đang chuẩn bị xâm chiếm bờ biển của Jangsa-ri, bị quân đội Bắc Triều Tiên chiếm đóng, cung cấp một cuộc chia rẽ rất cần thiết cho lực lượng Liên Hợp Quốc trước Trận chiến Incheon.',
                'length' => '01:15:00',
                'url_trailer' => 'https://www.youtube.com/embed/HhI49MSekBU',
                'url_image' => 'https://static.247phim.com/135002/conversions/5e98257f92068_the_battle-of_jangsari_d-190_274.jpg',
                'url_cmt_fb' => 'https://www.facebook.com/movie/group5/46',
                'status' => 1,
                'nation_id' => 5
            ],

            [
                'movie_id' => 47,
                'movie_name' => 'I Am Soldier (2014)',
                'year' => '2021',
                'total_eps' => 1,
                'introduce' => 'I am Soldier là bộ phim kể về Mickey Tomlinson (Tom Hughes), một đầu bếp quân sự, một người biết chắc rằng tham gia nhiệm vụ nguy hiểm nhất trong đời lính chính là trở thành đặc vụ “Special Air Service” (SAS). Các S.A.S là những đặc vụ nổi tiếng nhất trong trung đoàn quân sự đặc biệt của Anh Quốc.',
                'length' => '01:15:00',
                'url_trailer' => 'https://www.youtube.com/embed/WkqDg4w0Lro',
                'url_image' => 'https://static.247phim.com/120267/conversions/1549_i-am-soldier-2014_photo_portrait-190_274.jpg',
                'url_cmt_fb' => 'https://www.facebook.com/movie/group5/47',
                'status' => 1,
                'nation_id' => 2
            ],

            [
                'movie_id' => 48,
                'movie_name' => 'Jarhead 2: Field of Fire (2014)',
                'year' => '2021',
                'total_eps' => 1,
                'introduce' => 'Với những vết thương trong tâm hồn và thất vọng bởi chiến tranh, hạ sĩ Chris Merrimette được giao trách nhiệm bảo vệ áp tải một đơn vị có nhiệm vụ tiếp  tế vũ khí và lương thực cho một tiền đồn ở xa gần lãnh thổ Taliban kiểm soát. Trong khi lái xe qua địa bàn tỉnh Helmand thù địch, có 2 lính Hải quân SEAL cùng nhập vào đoàn xe của họ và tuyển mộ luôn đơn vị của Hạ sĩ để họ phải giúp đỡ một người phụ nữ Afghanistan nổi tiếng hoạt động có tầm quan trọng quốc tế cho cô ấy thoát khỏi sự truy đuổi của Taliban.',
                'length' => '01:15:00',
                'url_trailer' => 'https://www.youtube.com/embed/YKTXZGAHxvs',
                'url_image' => 'https://static.247phim.com/119688/conversions/1299_jarhead-2-field-of-fire-2014_photo_portrait-190_274.jpg',
                'url_cmt_fb' => 'https://www.facebook.com/movie/group5/48',
                'status' => 1,
                'nation_id' => 2
            ],

            //Phim Viễn Tưởng

            [
                'movie_id' => 49,
                'movie_name' => 'Long Quan Cổ Mộ: Vua Sói Tây Hạ',
                'year' => '2021',
                'total_eps' => 1,
                'introduce' => 'Bốn đào kép “Sinh Đán Tịnh Sửu” do Lưu Cẩm Châu cầm đầu, vì cứu ân sư Viên Chấn mất tích mà không thể không bước vào hành trình thám mộ tìm người vô cùng nguy hiểm.',
                'length' => '01:15:00',
                'url_trailer' => 'https://www.youtube.com/embed/jHVcI3NPO1Y',
                'url_image' => 'https://static.247phim.com/162553/conversions/60fa8c1dc153e_long-190_274.jpg',
                'url_cmt_fb' => 'https://www.facebook.com/movie/group5/49',
                'status' => 1,
                'nation_id' => 3
            ],

            [
                'movie_id' => 50,
                'movie_name' => 'Loki Thần Lừa Lọc (Phần 1)',
                'year' => '2021',
                'total_eps' => 6,
                'introduce' => 'Trước khi tìm hiểu về nội dung phim Loki (2021), các bạn hãy nhớ lại một trong những câu thoại kinh điển của Loki trong The Avengers: “Ta là Loki và ta đang gánh vác một sứ mệnh vẻ vang” tiếp tục được nhắc lại trong loạt phim riêng về nhân vật này. Câu hỏi được đặt ra là liệu đây là phiên bản Loki của dòng thời gian khác hay là một phiên bản Loki đang thực hiện nhiệm vụ cho TVA.',
                'length' => '01:15:00',
                'url_trailer' => 'https://www.youtube.com/embed/kj9s6M92mtA',
                'url_image' => 'https://static.247phim.com/162209/conversions/60c039edec5e2_MV5BNTkwOTE1ZDYtODQ3Yy00YTYwLTg0YWQtYmVkNmFjNGZlYmRiXkEyXkFqcGdeQXVyNTc4MjczMTM%40-190_274.jpg',
                'url_cmt_fb' => 'https://www.facebook.com/movie/group5/50',
                'status' => 1,
                'nation_id' => 2
            ],

            [
                'movie_id' => 51,
                'movie_name' => 'Kiếm Khách Bất Đắc Dĩ',
                'year' => '2021',
                'total_eps' => 1,
                'introduce' => 'Kể từ khi còn nhỏ, Yeon-Hee đã luôn nuôi ước mơ trở thành một ngôi sao phim hành động. Mặc dù sở hữu kỹ năng kiếm đạo vượt trội, cô dường như vẫn không có được thành tựu đáng kể nào. Cho đến một ngày, cô được một đoàn làm phim mời tham gia đóng một bộ phim ngắn của họ.',
                'length' => '01:15:00',
                'url_trailer' => 'https://www.youtube.com/embed/pXgF-vpu69E',
                'url_image' => 'https://static.247phim.com/162366/conversions/60d9622529ac2_largephoto1316348-190_274.jpg',
                'url_cmt_fb' => 'https://www.facebook.com/movie/group5/51',
                'status' => 1,
                'nation_id' => 5
            ],

            [
                'movie_id' => 52,
                'movie_name' => 'Thục Sơn Hàng Ma Truyện (Phần 2)',
                'year' => '2021',
                'total_eps' => 1,
                'introduce' => 'Thục Sơn Hàng Ma Truyện 2 kể về Vân Cư Nhạn phản đồ Nga Mi thu thập năm viên đá thần do thú dữ thượng cổ huyền bí để thống nhất tam giới, hồi sinh lại Nga Mi, Côn Luôn hai vị sư tổ phá hủy Nga Mi. Ba giới vừa mới từ trong tiên ma đại trận yên bình lại một lần nữa rơi vào mối nguy.',
                'length' => '01:15:00',
                'url_trailer' => 'https://www.youtube.com/embed/UupvC8jBlyU',
                'url_image' => 'https://static.247phim.com/162400/conversions/60de7e9b59f40_legenf-%C3%B2-zu-2-190_274.jpg',
                'url_cmt_fb' => 'https://www.facebook.com/movie/group5/52',
                'status' => 1,
                'nation_id' => 3
            ],

            [
                'movie_id' => 53,
                'movie_name' => 'Mộ Hoàng Bì Tử',
                'year' => '2021',
                'total_eps' => 1,
                'introduce' => 'Để giải cứu cô thôn nữ Hoạ Minh bị bệnh, Hồ Bát Nhất cùng một số thanh niên trai tráng ở miền quê Đông Bắc đã liên kết với chú thợ săn họ Triệu, tìm tới hang động của người gấu tuyết trong rừng để tìm thuốc giải. Không ngờ đột nhiên người tuyết ở đâu xuất hiện tấn công, buộc phải trốn vào khu nhà Hoàng Bì dưới lòng đất, từ đây những sự kiện ly kỳ ở trong ngôi nhà Hoàng Bì dần xảy ra, ảo ảnh trùng trùng khắp nơi. ',
                'length' => '01:15:00',
                'url_trailer' => 'https://www.youtube.com/embed/S39IwC33teg',
                'url_image' => 'https://static.247phim.com/162241/conversions/60c8410dec191_hongbi-190_274.jpg',
                'url_cmt_fb' => 'https://www.facebook.com/movie/group5/53',
                'status' => 1,
                'nation_id' => 3
            ],

            //Phim Kiếm Hiệp

            [
                'movie_id' => 54,
                'movie_name' => 'Phá Thần Lục',
                'year' => '2021',
                'total_eps' => 20,
                'introduce' => 'Nội dung phim Phá Thần Lục xoay quanh Dương Liệt Quân, một kỳ tài võ học cùng hành trình chống lại thế lực mới trong giới võ thuật. Thông minh, tài năng và sở hữu những phẩm chất vượt trội, Liệt Quân chính là người giỏi nhất của môn phái. Sau khi cùng vị hôn thê Tôn Cẩn, sư đệ Lê Thúc Văn phá tan trận kỳ ảo thì họ thì cờ phát hiện bị mật động trời. Song hùng có thể thành ma cũng có thể thành phật, họ bắt buộc phải chiến đấu đến cùng.',
                'length' => '01:00:00',
                'url_trailer' => 'https://www.youtube.com/embed/InR3gzsNA1A',
                'url_image' => 'https://static.247phim.com/149540/conversions/5f2382223cfb6_as_god-02-190_274.jpg',
                'url_cmt_fb' => 'https://www.facebook.com/movie/group5/54',
                'status' => 1,
                'nation_id' => 3
            ],

            [
                'movie_id' => 55,
                'movie_name' => 'Linh Vực',
                'year' => '2021',
                'total_eps' => 36,
                'introduce' => 'Tần Liệt (Phạm Thừa Thừa diễn) bị mất trí nhớ, do vô tình bị bị cuốn vào vòng âm mưu. Cậu cùng Lăng Ngữ Thi (Trình Tiêu diễn), cùng một nhóm người bạn bắt đầu mở ra một hành trình mới, tìm kiếm chân tướng thân thế và đạt được sức mạnh lớn hơn, để cùng nhau bảo vệ Linh Vực.',
                'length' => '00:55:00',
                'url_trailer' => 'https://www.youtube.com/embed/74_z2eks7Bk',
                'url_image' => 'https://static.247phim.com/160069/conversions/5ffbd0240e1e2_linhvuc-d-190_274.jpg',
                'url_cmt_fb' => 'https://www.facebook.com/movie/group5/55',
                'status' => 1,
                'nation_id' => 3
            ],

            [
                'movie_id' => 56,
                'movie_name' => 'Truyền Thuyết Về Lữ Bố',
                'year' => '2021',
                'total_eps' => 1,
                'introduce' => 'Lữ Bố, 19 tuổi là người hiếm hoi trốn thoát sau một cuộc thử nghiệm thuốc độc đầy đáng sợ. Sau đó, anh được một cô gái xinh đẹp và lương thiện cứu, cả 2 có những ngày tháng sống hạnh phúc bên nhau. Tuy nhiên, cuộc sống yên bình của Lữ Bố không được bao lâu thì anh bị người của Dou Zhun phát hiện, và bắt lại. Đầy hận thù biến thành đau thương, một bên là quê hương, một bên là tình yêu, họ sẽ đi về đâu trong thế giới đầy những hỗn loạn và máu.',
                'length' => '01:40:00',
                'url_trailer' => 'https://www.youtube.com/embed/AWLYXt2aeOg',
                'url_image' => 'https://static.247phim.com/161979/conversions/6099e868527e4_lubo-d-190_274.jpg',
                'url_cmt_fb' => 'https://www.facebook.com/movie/group5/56',
                'status' => 1,
                'nation_id' => 3
            ],

            [
                'movie_id' => 57,
                'movie_name' => 'Đãng Khấu Phong Vân',
                'year' => '2021',
                'total_eps' => 1,
                'introduce' => 'Phim Đãng Khấu Phong Vân - God Of War 2017: Lấy bối cảnh vào thế kỷ 16, bắt đầu từ việc hải tặc Nhật Bản đang ngày càng hoành hành cũng như phát triển lớn mạnh hơn ở dọc khắp bờ biển của Trung Quốc. Năm 1557, những tên cướp biển đã chiếm thành công Cengang ở Chiết Giang. Sau vài tháng giao tranh ác liệt mà không có kết quả, Tư lệnh Yu cuối cùng cũng đánh bại bọn chúng dưới sự lãnh đạo của Tướng Qi, một người vừa mới được thăng cấp. Tuy nhiên, những tay cướp biển Nhật cũng không phải dạng vừa khi mà chúng quyết tâm thực hiện kế hoạch quyết chiến để thoát thân.',
                'length' => '01:40:00',
                'url_trailer' => 'https://www.youtube.com/embed/MYd5QH7y65Y',
                'url_image' => 'https://static.247phim.com/152768/conversions/5f58a1c71039e_God_Of_War-190_274.jpg',
                'url_cmt_fb' => 'https://www.facebook.com/movie/group5/57',
                'status' => 1,
                'nation_id' => 3
            ],

            [
                'movie_id' => 58,
                'movie_name' => 'Mộc Lan Truyền Kỳ',
                'year' => '2021',
                'total_eps' => 20,
                'introduce' => 'Những năm Bắc Ngụy, Mộc Lan thay cha tòng quân, vinh quang trở về. Mười năm sau Nhu Nhiên một lần nữa xâm phạm biên giới, Mộc Lan kiên quyết trở lại chiến trường. Vì cứu Thác Bạt Ngao, Mộc Lan rơi vào tay quân địch. Lúc bị giam, Mộc Lan nhìn thấu quỷ kế của Khôn Bằng, Khôn Bằng bèn giết hại Đại Hãn rồi giá họa cho Mộc Lan..',
                'length' => '00:50:00',
                'url_trailer' => 'https://www.youtube.com/embed/6Vy5TTWaH20',
                'url_image' => 'https://static.247phim.com/135834/conversions/5ea6802d59284_mulan_china_d-190_274.jpg',
                'url_cmt_fb' => 'https://www.facebook.com/movie/group5/58',
                'status' => 1,
                'nation_id' => 3
            ],

            [
                'movie_id' => 59,
                'movie_name' => 'Thanh Long Yển Nguyệt Đao',
                'year' => '2021',
                'total_eps' => 1,
                'introduce' => 'Phim Thanh Long Yển Nguyệt Đao Thuyết minh lấy bối cảnh trong trận chiến Mạch thành, Quan Vũ bị Phan Chương của quân Ngô giết chết, Thanh Long Yển Nguyệt Đao cũng bị cướp đi từ đó. Quan Hưng, con trai của Quan Vũ may mắn sống sót một lòng báo thù cho cha, khổ luyện võ công chỉ vì muốn đoạt thần binh về.',
                'length' => '01:50:00',
                'url_trailer' => 'https://www.youtube.com/embed/a8j0du9Cl80',
                'url_image' => 'https://static.247phim.com/161143/conversions/60586b5ee7b06_7777-190_274.jpg',
                'url_cmt_fb' => 'https://www.facebook.com/movie/group5/59',
                'status' => 1,
                'nation_id' => 3
            ],

            [
                'movie_id' => 60,
                'movie_name' => 'Toàn Chức Cao Thủ - Đỉnh Cao Vinh Diệu',
                'year' => '2021',
                'total_eps' => 18,
                'introduce' => 'Năm 2015 giải đấu Esport không giới hạn nghề nghiệp toàn quốc đầu tiên được tổ chức, những người với bối cảnh khác nhau đến từ khắp nơi trong nước tề tụ lại, để giành lấy vinh quang cao nhất trên đấu trường Esport. Diệp Tu thời niên thiếu cũng là một trong số đó, anh ôm giấc mơ trở thành quán quân Esport, vượt qua tầng tầng khó khăn, lãnh đạo chiến đội Gia Thế cuối cùng đi lên đỉnh cao Vinh Diệu!',
                'length' => '00:30:00',
                'url_trailer' => 'https://www.youtube.com/embed/oef9UwnlpNU',
                'url_image' => 'https://static.247phim.com/161510/conversions/606ec163654a5_quan-zhi-gao-shou-zhi-dian-feng-rong-yao-2019-i-movie-poster-190_274.jpg',
                'url_cmt_fb' => 'https://www.facebook.com/movie/group5/60',
                'status' => 1,
                'nation_id' => 3
            ],

            [
                'movie_id' => 61,
                'movie_name' => 'Thượng Cổ Mật Ước',
                'year' => '2021',
                'total_eps' => 45,
                'introduce' => 'Phim Thượng Cổ Mật Ước – The Promise Keepers kể về Ngụy Tấn Nam bắc triều , Tiên Ti Mộ dung thị lập nên yên quốc. Lang tộc luôn trợ giúp hoàng tộc Mộ Dung. Vua Yên còn trẻ, và các trận chiến chính trị giữa các thành viên hoàng gia rất khốc liệt. 1 sự biến cố trong hoàng gia khiến Con trai cả Murong Yan bị chặt đầu, con trai thứ hai Murong Chen bị gửi đi lưu vong. ',
                'length' => '00:45:00',
                'url_trailer' => 'https://www.youtube.com/embed/ns7yufyjlXE',
                'url_image' => 'https://static.247phim.com/162457/conversions/60e66f45824b6_linh-190_274.jpg',
                'url_cmt_fb' => 'https://www.facebook.com/movie/group5/61',
                'status' => 1,
                'nation_id' => 3
            ]

        ]);
        //
    }
}
