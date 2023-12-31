<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PhimSeeder extends Seeder
{
    public function run(): void
    {

        DB::table('phims')->delete();

        DB::table('phims')->truncate();

        DB::table('phims')->insert([
                [
                    'ten_phim'          => "THANH GƯƠM TRỪ TÀ",
                    'slug_phim'         => Str::slug('THANH GƯƠM TRỪ TÀ'),
                    'hinh_anh'          => "assets_client/images/poster_movie/1.png",
                    'dao_dien'          => "Kim Sung-Sik",
                    'dien_vien'         => "Gang Dong Won, Esom, Lee Dong Hwi, Kim Jong Soo",
                    'the_loai'          => "Hài,Kinh dị",
                    'thoi_luong'        => 110,
                    'ngon_ngu'          => "Tiếng Hàn - Phụ đề tiếng Việt",
                    'rated'             => "C16 - PHIM CẤM PHỔ BIẾN ĐẾN KHÁN GIẢ DƯỚI 16 TUỔI",
                    'mo_ta'             => "Chuyện phim xoay quanh nhân vật thầy trừ tà Cheon (Gang Dong Won thủ vai), cùng với chiến hữu của mình In Bae (Lee Dong Hwi thủ vai), chuyên đi lừa đảo với những màn trừ tà pha ke sử dụng công nghệ cao cùng khả năng hùng biện và tài “thao túng tâm lý đỉnh cao. Tuy chuyên đi trừ tà nhưng cả hai đều không thể nhìn thấy và không tin vào ma quỷ cho tới khi họ phải đối đầu với một con ác quỷ thật đang khống chế em gái (Park So Yi thủ vai) của Yoo Kyung (Esom thủ vai). Yoo Kyung sở hữu “đôi mắt âm dương” có thể nhìn thấy những linh hồn. ",
                    'trailer'           => "https://youtu.be/Nha2vhLYE54",
                    'bat_dau'           => '2024-05-17',
                    'ket_thuc'          => '2024-06-20',
                    'hien_thi'          => 1,
            ],
                    [
                    'ten_phim'          => "ĐẤT RỪNG PHƯƠNG NAM",
                    'slug_phim'         => Str::slug('ĐẤT RỪNG PHƯƠNG NAM'),
                    'hinh_anh'          => "assets_client/images/poster_movie/2.png",
                    'dao_dien'          => "Nguyễn Quang Dũng",
                    'dien_vien'         => "Hồng Ánh, Huỳnh Hạo Khang, Mai Tài Phến, Công Ninh,...",
                    'the_loai'          => "Phiêu lưu,Gia đình",
                    'thoi_luong'        => 110,
                    'ngon_ngu'          => "Tiếng Hàn - Phụ đề tiếng Việt",
                    'rated'             => "K - PHIM ĐƯỢC PHỔ BIẾN ĐẾN NGƯỜI XEM DƯỚI 13 TUỔI VÀ CÓ NGƯỜI BẢO HỘ ĐI KÈM",
                    'mo_ta'             => "Sau bao ngày chờ đợi, dự án điện ảnh gợi ký ức tuổi thơ của nhiều thế hệ người Việt chính thức tung hình ảnh đầu tiên đầy cảm xúc. First look poster khắc họa hình ảnh đối lập: bé An đang ôm chặt mẹ giữa một khung cảnh chạy giặc loạn lạc. Cùng chờ đợi và theo dõi thêm hành trình bé An đi tìm cha khắp nam kỳ lục tỉnh cùng các người bạn đồng hành nhé! ",
                    'trailer'           => "https://youtu.be/6qH81wVCH6k",
                    'bat_dau'           => '2024-05-17',
                    'ket_thuc'          => '2024-06-20',
                    'hien_thi'          => 1,
            ],
            [
                'ten_phim'          => "GIAO LỘ 8675",
                'slug_phim'         => Str::slug('GIAO LỘ 8675'),
                'hinh_anh'          => "assets_client/images/poster_movie/3.png",
                'dao_dien'          => "Tân DS",
                'dien_vien'         => "Isaac, Rocker Nguyễn, La Thành, Emma Lê, Lợi Trần, Ngọc Hồ",
                'the_loai'          => "Hành động,Hài,Tình cảm",
                'thoi_luong'        => 110,
                'ngon_ngu'          => "Tiếng Hàn - Phụ đề tiếng Việt",
                'rated'             => "K - PHIM ĐƯỢC PHỔ BIẾN ĐẾN NGƯỜI XEM DƯỚI 13 TUỔI VÀ CÓ NGƯỜI BẢO HỘ ĐI KÈM",
                'mo_ta'             => "Bộ phim xoay quanh câu chuyện về các bạn trẻ dù xuất hiện tại những bối cảnh khác nhau và đối mặt vấn đề riêng, tất cả cùng có chung một điểm là những người trẻ đang đứng trước những ngọn núi phải chinh phục của chính mình.",
                'trailer'           => "https://youtu.be/kX8PHvLfOUU",
                'bat_dau'           => '2024-05-17',
                'ket_thuc'          => '2024-06-20',
                'hien_thi'          => 1,
            ],
            [
                'ten_phim'          => "MUÔN KIẾP NHÂN DUYÊN",
                'slug_phim'         => Str::slug('MUÔN KIẾP NHÂN DUYÊN'),
                'hinh_anh'          => "assets_client/images/poster_movie/4.png",
                'dao_dien'          => "Celine Song",
                'dien_vien'         => "Greta Lee, Teo Yoo, John Magaro",
                'the_loai'          => "Tình cảm",
                'thoi_luong'        => 105,
                'ngon_ngu'          => "Phụ đề tiếng Việt",
                'rated'             => "K - PHIM ĐƯỢC PHỔ BIẾN ĐẾN NGƯỜI XEM DƯỚI 13 TUỔI VÀ CÓ NGƯỜI BẢO HỘ ĐI KÈM",
                'mo_ta'             => "Muôn Kiếp Nhân Duyên xoay quanh hai nhân vật chính - Nora (Greta Lee) và Hae Sung (Teo Yoo). Tình bạn thân thiết của họ bị chia cắt khi Nora theo gia đình di cư khỏi Hàn Quốc vào năm 12 tuổi. 20 năm sau, như một mối duyên tiền định, họ gặp lại nhau tại Mỹ, nhưng lúc này, Nora đã trở thành vợ của Arthur (John Magaro). Nhìn lại quá khứ, nói về hiện tại và hướng đến tương lai - những cuộc trò chuyện nhẹ nhàng giữa Nora và Hae Sung trong 1 tuần ngắn ngủi ở New York được đan xen bởi các khoảng lặng, khiến người xem chìm đắm vào suy ngẫm về cuộc sống, số phận và tình yêu.",
                'trailer'           => "https://youtu.be/R3oiWcPIAiE",
                'bat_dau'           => '2024-05-17',
                'ket_thuc'          => '2024-06-20',
                'hien_thi'          => 1,

            ],
            [
                'ten_phim'          => "NGƯỜI VỢ CUỐI CÙNG",
                'slug_phim'         => Str::slug('NGƯỜI VỢ CUỐI CÙNG'),
                'hinh_anh'          => "assets_client/images/poster_movie/5.png",
                'dao_dien'          => "Victor Vũ",
                'dien_vien'         => "Kaity Nguyễn - Thuận Nguyễn - NSƯT Quang Thắng - NSƯT Kim Oanh - Đinh Ngọc Diệp - Anh Dũng - Quốc Huy - Bé Lưu Ly",
                'the_loai'          => "Tình cảm, Tâm Lý",
                'thoi_luong'        => 105,
                'ngon_ngu'          => "Phụ đề tiếng Anh",
                'rated'             => "K - PHIM ĐƯỢC PHỔ BIẾN ĐẾN NGƯỜI XEM DƯỚI 13 TUỔI VÀ CÓ NGƯỜI BẢO HỘ ĐI KÈM",
                'mo_ta'             => "Lấy cảm hứng từ tiểu thuyết Hồ Oán Hận, của nhà văn Hồng Thái, Người Vợ Cuối Cùng là một bộ phim tâm lý cổ trang, lấy bối cảnh Việt Nam vào triều Nguyễn. LINH - Người vợ bất đắc dĩ của một viên quan tri huyện, xuất thân là con của một gia đình nông dân nghèo khó, vì không thể hoàn thành nghĩa vụ sinh con nối dõi nên đã chịu sự chèn ép của những người vợ lớn trong gia đình. Sự gặp gỡ tình cờ của cô và người yêu thời thanh mai trúc mã của mình - NH N đã dẫn đến nhiều câu chuyện bất ngờ xảy ra khiến cuộc sống cô hoàn toàn thay đổi.",
                'trailer'           => "https://youtu.be/JEuldDZuJTo",
                'bat_dau'           => '2024-05-17',
                'ket_thuc'          => '2024-06-20',
                'hien_thi'          => 1,

            ],[
                'ten_phim'          => "CHIẾM ĐOẠT",
                'slug_phim'         => Str::slug('CHIẾM ĐOẠT'),
                'hinh_anh'          => "assets_client/images/poster_movie/6.png",
                'dao_dien'          => "Thắng Vũ",
                'dien_vien'         => "Miu Lê, Lãnh Thanh, Karik, Phương Anh Đào,...",
                'the_loai'          => "Tâm Lý,Hồi hộp",
                'thoi_luong'        => 105,
                'ngon_ngu'          => "Phụ đề tiếng Anh",
                'rated'             => "K - PHIM ĐƯỢC PHỔ BIẾN ĐẾN NGƯỜI XEM DƯỚI 13 TUỔI VÀ CÓ NGƯỜI BẢO HỘ ĐI KÈM",
                'mo_ta'             => "Kể về người vợ của một gia đình thượng lưu thuê cô bảo mẫu “trong mơ” để chăm sóc con trai mình. Nhưng cô không ngờ rằng, phía sau sự trong sáng, tinh khiết kia, cô bảo mẫu luôn che giấu âm mưu nhằm phá hoại hạnh phúc gia đình và khiến cuộc sống của cô thay đổi mãi mãi.",
                'trailer'           => "https://youtu.be/JEuldDZuJTo",
                'bat_dau'           => '2024-05-17',
                'ket_thuc'          => '2024-06-20',
                'hien_thi'          => 1,

            ],
            [
                'ten_phim'          => "KẺ KIẾN TẠO",
                'slug_phim'         => Str::slug('KẺ KIẾN TẠO'),
                'hinh_anh'          => "assets_client/images/poster_movie/7.png",
                'dao_dien'          => "Gareth Edwards",
                'dien_vien'         => "Gemma Chan, John David Washington, Ralph Ineson, Ngo Thanh Van",
                'the_loai'          => "Phiêu lưu,Hành động,Tâm Lý",
                'thoi_luong'        => 105,
                'ngon_ngu'          => "Phụ đề tiếng Anh",
                'rated'             => "K - PHIM ĐƯỢC PHỔ BIẾN ĐẾN NGƯỜI XEM DƯỚI 13 TUỔI VÀ CÓ NGƯỜI BẢO HỘ ĐI KÈM",
                'mo_ta'             => "Cuộc chiến giữa loài người và AI sắp diễn ra. Đón xem The Creator (Kẻ Kiến Tạo) - Dự kiến khởi chiếu: 29.09.2023",
                'trailer'           => "https://youtu.be/JEuldDZuJTo",
                'bat_dau'           => '2024-05-17',
                'ket_thuc'          => '2024-06-20',
                'hien_thi'          => 1,
            ],
            [
                'ten_phim'          => "XỨ SỞ CÁC NGUYÊN TỐ",
                'slug_phim'         => Str::slug('XỨ SỞ CÁC NGUYÊN TỐ'),
                'hinh_anh'          => "assets_client/images/poster_movie/8.png",
                'dao_dien'          => "Peter Sohn",
                'dien_vien'         => "Leah Lewis, Mamoudou Athie",
                'the_loai'          => "Gia đình, Hài, Hoạt Hình",
                'thoi_luong'        => 110,
                'ngon_ngu'          => "Tiếng Anh - Phụ đề Tiếng Việt; Lồng tiếng",
                'rated'             => "K - PHIM ĐƯỢC PHỔ BIẾN ĐẾN NGƯỜI XEM DƯỚI 13 TUỔI VÀ CÓ NGƯỜI BẢO HỘ ĐI KÈM",
                'mo_ta'             => "Xứ Sở Các Nguyên Tố từ Disney và Pixar lấy bối cảnh tại thành phố các nguyên tố, nơi lửa, nước, đất và không khí cùng chung sống với nhau. Câu chuyện xoay quanh nhân vật Ember, một cô nàng cá tính, thông minh, mạnh mẽ và đầy sức hút. Tuy nhiên, mối quan hệ của cô với Wade - một anh chàng hài hước, luôn thuận thế đẩy dòng - khiến Ember cảm thấy ngờ vực với thế giới này. Được đạo diễn bởi Peter Sohn, sản xuất bởi Denise Ream",
                'trailer'           => "https://www.youtube.com/watch?v=8qTBWDKtyYU",
                'bat_dau'           => '2024-05-17',
                'ket_thuc'          => '2024-06-20',
                'hien_thi'          => 1,

            ],
            //Đang chiếu
            [
                'ten_phim'          => "TRANSFORMERS: QUÁI THÚ TRỖI DẬY",
                'slug_phim'         => Str::slug('TRANSFORMERS: QUÁI THÚ TRỖI DẬY'),
                'hinh_anh'          => "assets_client/images/poster_movie/9.png",
                'dao_dien'          => "Steven Caple Jr.",
                'dien_vien'         => "Michelle Yeoh, Dominique Fishback, Ron Perlman",
                'the_loai'          => "Hành Động, Khoa Học Viễn Tưởng, Phiêu Lưu",
                'thoi_luong'        =>  127,
                'ngon_ngu'          => "Tiếng Anh - Phụ đề Tiếng Việt",
                'rated'             => "T13 - PHIM ĐƯỢC PHỔ BIẾN ĐẾN NGƯỜI XEM TỪ ĐỦ 13 TUỔI TRỞ LÊN (13+)",
                'mo_ta'             => "Bộ phim dựa trên sự kiện Beast Wars trong loạt phim hoạt hình 'Transformers', nơi mà các robot có khả năng biến thành động vật khổng lồ cùng chiến đấu chống lại một mối đe dọa tiềm tàng.",
                'trailer'           => "https://www.youtube.com/watch?v=lRBA1AKyUaI",
                'bat_dau'           => '2024-06-01',
                'ket_thuc'          => '2024-06-15',
                'hien_thi'          => 1,

            ],
            [
                'ten_phim'          => "MẸ ƠI ĐỪNG KHÓC...",
                'slug_phim'         => Str::slug('MẸ ƠI ĐỪNG KHÓC...'),
                'hinh_anh'          => "assets_client/images/poster_movie/10.png",
                'dao_dien'          => "Lee Ho-kyung",
                'dien_vien'         => "Lee Ho-kyung, Lee Ho-kyung, Ebon Moss-Bachrach",
                'the_loai'          => "Phim tài liệu",
                'thoi_luong'        =>  78  ,
                'ngon_ngu'          => "Tiếng Hàn - Phụ đề tiếng Việt",
                'rated'             => "T16 - PHIM ĐƯỢC PHỔ BIẾN ĐẾN NGƯỜI XEM TỪ ĐỦ 16 TUỔI TRỞ LÊN (16+)",
                'mo_ta'             => "Rơi nước mắt cùng những câu chuyện cuối đời từ những người cha, người mẹ và những đứa trẻ đang phải kiên cường bên bờ tuyệt vọng chiến đấu với căn bệnh ung thư. Dù ngắn ngủi đến đâu, giây phút đẹp nhất cuộc đời là khi ta còn được ở bên cạnh người mình yêu thương.",
                'trailer'           => "https://www.youtube.com/watch?v=q_XWWWlA39k",
                'bat_dau'           => '2024-05-28',
                'ket_thuc'          => '2024-06-08',
                'hien_thi'          => 1,

            ],
            [
                'ten_phim'          => "CÔ THÀNH TRONG GƯƠNG",
                'slug_phim'         => Str::slug('CÔ THÀNH TRONG GƯƠNG'),
                'hinh_anh'          => "assets_client/images/poster_movie/11.png",
                'dao_dien'          => "Keiichi Hara",
                'dien_vien'         => "Ami Touma, Takumi Kitamura, Ashida Mana, Minami Takayama, Itagaki Rihito, Naho Yokomizo, Kaji Yuki, Sakura Yoshiyanagi",
                'the_loai'          => "Hoạt Hình",
                'thoi_luong'        =>  116    ,
                'ngon_ngu'          => "Tiếng Nhật - Phụ đề Tiếng Việt",
                'rated'             => "T13 - PHIM ĐƯỢC PHỔ BIẾN ĐẾN NGƯỜI XEM TỪ ĐỦ 13 TUỔI TRỞ LÊN (13+)",
                'mo_ta'             => "Bỗng dưng một ngày nọ, Kokoro - cô bé lớp bảy ngày qua ngày giam mình trong phòng riêng thay vì tới trường sau tổn thương tâm lý - phát hiện tấm gương trong phòng mình phát sáng, bước qua tấm gương, Kokoro nhận ra mình đang ở trong một toà lâu đài cùng sáu người bạn chung hoàn cảnh. Bảy đứa trẻ cô độc buộc phải dấn bước vào một cuộc phiêu lưu kỳ lạ, trước khi đáp án cuối cùng mở ra, gây sững sờ và xúc động tột cùng",
                'trailer'           => "https://www.youtube.com/watch?v=ptK2oXbMIJ0",
                'bat_dau'           => '2024-10-05',
                'ket_thuc'          => '2024-06-05',
                'hien_thi'          => 1,

            ],
            [
                'ten_phim'          => "BÉ TRỨNG: NÁO LOẠN CHÂU PHI",
                'slug_phim'         => Str::slug('BÉ TRỨNG: NÁO LOẠN CHÂU PHI'),
                'hinh_anh'          => "assets_client/images/poster_movie/12.png",
                'dao_dien'          => "Gabriel Riva Palacio Alatriste, Rodolfo Riva Palacio Alatriste",
                'dien_vien'         => "Bruno Bichir, Maite Perroni, Carlos Espejel",
                'the_loai'          => "Hoạt Hình",
                'thoi_luong'        =>  89  ,
                'ngon_ngu'          => "Lồng tiếng Việt",
                'rated'             => " K - PHIM ĐƯỢC PHỔ BIẾN ĐẾN NGƯỜI XEM DƯỚI 13 TUỔI VÀ CÓ NGƯỜI BẢO HỘ ĐI KÈM",
                'mo_ta'             => "Một chú gà trống dễ thương, tên là Toto, sống yên bình bên chú gà nhỏ Di của mình trong trang trại Pollón nổi tiếng. Dần dần, cả hai nảy sinh tình cảm và giờ đây, họ đã trở thành cha mẹ đáng tự hào của một cặp trứng nhỏ dễ thương tên là Uly và Max, chúng có đặc điểm là rất vàng, khiến chúng trông giống như những “quả trứng vàng”. ",
                'trailer'           => "https://www.youtube.com/watch?v=TpTTKKV5Ado",
                'bat_dau'           => '2024-10-10',
                'ket_thuc'          => '2024-06-20',
                'hien_thi'          => 1,

            ],
            [
                'ten_phim'          => "MA SƠ TRỤC QUỶ",
                'slug_phim'         => Str::slug('MA SƠ TRỤC QUỶ'),
                'hinh_anh'          => "assets_client/images/poster_movie/13.png",
                'dao_dien'          => "Adrian Garcia Bogliano",
                'dien_vien'         => "María Evoli, Ramón Medína, Pilar Santacruz",
                'the_loai'          => " Kinh Dị",
                'thoi_luong'        =>  102     ,
                'ngon_ngu'          => "Tiếng Tây Ban Nha - Phụ đề Tiếng Việt & Tiếng Anh",
                'rated'             => "T18 - PHIM ĐƯỢC PHỔ BIẾN ĐẾN NGƯỜI XEM TỪ ĐỦ 18 TUỔI TRỞ LÊN (18+)",
                'mo_ta'             => "Ofelia - một nữ tu trẻ vừa đặt chân đến thị trấn San Ramon đã bị ép phải thực hiện buổi lễ trừ tà cho một phụ nữ đang mang thai. Tưởng chừng buổi trục quỷ đã hoàn tất, Ofelia bàng hoàng nhận ra hiện thân quỷ dữ chưa từng biến mất.",
                'trailer'           => "https://www.youtube.com/watch?v=b22qRSdqpXA",
                'bat_dau'           => '2024-10-05',
                'ket_thuc'          => '2024-06-20',
                'hien_thi'          => 1,

            ],
            [
                'ten_phim'          => "MÓNG VUỐT",
                'slug_phim'         => Str::slug('MÓNG VUỐT'),
                'hinh_anh'          => "assets_client/images/poster_movie/14.png",
                'dao_dien'          => "Lê Thanh Sơn",
                'dien_vien'         => "Tuấn Trần, Thảo Tâm, Rocker Nguyễn, Gi A Nguyễn, Quốc Khánh, Naomi, Ceri, Hồng Thanh",
                'the_loai'          => "Hồi hộp, Kinh Dị",
                'thoi_luong'        =>  100     ,
                'ngon_ngu'          => "Tiếng Việt - Phụ đề Tiếng Anh",
                'rated'             => "T18 - PHIM ĐƯỢC PHỔ BIẾN ĐẾN NGƯỜI XEM TỪ ĐỦ 18 TUỔI TRỞ LÊN (18+)",
                'mo_ta'             => "Móng Vuốt dẫn dắt câu chuyện đi từ buổi tiệc dã ngoại náo nhiệt của một nhóm bạn đến một kết cục kinh hoàng khi phải đấu tranh sinh tồn với một con ác thú.",
                'trailer'           => "https://www.youtube.com/watch?v=AX7lnd9w_yc",
                'bat_dau'           => '2024-10-01',
                'ket_thuc'          => '2024-06-20',
                'hien_thi'          => 1,
            ],



        ]);

    }
}
