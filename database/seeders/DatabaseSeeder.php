<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //bảng loại phòng
        $loaiPhong = [
            [
                "loai_phong" => "Phòng thường",
                "created_at"=>date("y-m-d H:i:s"),
                "updated_at"=>date("y-m-d H:i:s")
            ],
            [
                "loai_phòng" => "Phòng VIP",
                "created_at"=>date("y-m-d H:i:s"),
                "updated_at"=>date("y-m-d H:i:s")
            ],
        ];
        DB::table('loai_phong')->insert($loaiPhong);
        //Bảng phòng
        $phong= [
        ];
        for($i=1;$i<21;$i++){
                if($i==1){
                    $tenPhong = 'Modern';
                }elseif($i==2){
                    $tenPhong ='Nordic';
                }elseif($i==3){
                    $tenPhong ='Minimalism';
                }elseif($i==4){
                    $tenPhong ='Mid-Century Modern';
                }elseif($i==5){
                    $tenPhong ='Color Block';
                }elseif($i==6){
                    $tenPhong ='Luxury';
                }elseif($i==7){
                    $tenPhong ='Contemporaty';
                }elseif($i==8){
                    $tenPhong ='Rustic';
                }elseif($i==9){
                    $tenPhong ='Hi-tech';
                }elseif($i==10){
                    $tenPhong ='Industrial';
                }elseif($i==11){
                    $tenPhong ='Country';
                }elseif($i==12){
                    $tenPhong ='Romanticism';
                }elseif($i==13){
                    $tenPhong ='Organic';
                }elseif($i==14){
                    $tenPhong ='Hollywood';
                }elseif($i==15){
                    $tenPhong ='Funky';
                }elseif($i==16){
                    $tenPhong ='Metallic';
                }elseif($i==17){
                    $tenPhong ='Bratalism';                    
                }elseif($i==18){
                    $tenPhong ='Baroque';
                }elseif($i==19){
                    $tenPhong ='Neoclassical';
                }elseif($i==20){
                    $tenPhong ='Classic';
                }
            $phong[]= [
                "ten_phong" => $tenPhong,
                "gia_phong" => 300+$i*10,
                "hinh_anh_phong"  => $i.".jpg",
                "mo_ta" => "Đạt tiêu chuẩn 5 sao của Châu Âu:
                - Điện tích: 100m2, trang thiết bị đầy đủ, hiện đại.
                - Hướng: mặt phố.
                - Phòng: dường đôi dành cho 2 người.
                - Tiện nghi: Điều hòa, nóng lạnh, wifi...
                ",
                "ma_loai_phong" => 1,
                "ma_dich_vu" => 1,
                "created_at"=>date("y-m-d H:i:s"),
                "updated_at"=>date("y-m-d H:i:s"),
            ];
        }
        DB::table('phong')->insert($phong);    

        //bảng dịch vụ
        $dichVu= [
            [
                "ten_dich_vu" => "Dịch vụ phòng thường",
                "mo_ta" => "Bao gồm: Nhà hàng, quần Bar, giặt quần áo, tắm biển, Tour du lịch",
                "gia_dich_vu" => 100,
                "created_at"=>date("y-m-d H:i:s"),
                "updated_at"=>date("y-m-d H:i:s"),
            ],
            [
                "ten_dich_vu" => "Dịch vụ phòng VIP",
                "mo_ta" => "Bao gồm: Nhà hàng, quần Bar, giặt quần áo, tắm biển, bể bơi, Spa, phòng gym, Karaoke, Bar club, Tour du lịch",
                "gia_dich_vu" => 400,
                "created_at"=>date("y-m-d H:i:s"),
                "updated_at"=>date("y-m-d H:i:s"),
            ],
        ];
        DB::table('dich_vu')->insert($dichVu);

        //bảng nhân viên
        $users= [
            [
                "ten_nhan_vien" => "Nguyễn Đình Huân",
                "hinh_anh_nv" => "naruto.jpg",
                "ngay_sinh" => "2002-01-16",
                "dia_chi" => "Thái Bình",
                "scmt" => 12345678,
                "chuc_vu" => "Chủ tịch",
                "email" => "huannd@gmail.com",
                "password" => Hash::make('1601'),
                "phan_quyen" => 0, "sdt"=>"0966818546",
                "created_at"=>date("y-m-d H:i:s"),
                "updated_at"=>date("y-m-d H:i:s"),
            ],
            [
                "ten_nhan_vien" => "Trương Đức Anh",
                "hinh_anh_nv" => "sasuke.jpg",
                "ngay_sinh" => "2002-1-03",
                "dia_chi" => "Sơn La",
                "scmt" => 12002365,
                "chuc_vu" => "Giám đốc điều hành",
                "email" => "anhtd@gmail.com",
                "password" => Hash::make('1'),
                "phan_quyen" => 0, "sdt"=>"0648484554",
                "created_at"=>date("y-m-d H:i:s"),
                "updated_at"=>date("y-m-d H:i:s"),
            ],
            [
                "ten_nhan_vien" => "Ngô Văn Phong",
                "hinh_anh_nv" => "shikamaru.jpg",
                "ngay_sinh" => "2002-11-19",
                "dia_chi" => "Hà Nội",
                "scmt" => 12002268,
                "chuc_vu" => "Phó giám đốc điều hành",
                "email" => "phongnv@gmail.com",
                "password" => Hash::make('123456'),
                "phan_quyen" => 0, "sdt"=>"0648484598",
                "created_at"=>date("y-m-d H:i:s"),
                "updated_at"=>date("y-m-d H:i:s"),
            ],
            [
                "ten_nhan_vien" => "Đặng Thanh Thùy",
                "hinh_anh_nv" => "neji.jpg",
                "ngay_sinh" => "2002-12-09",
                "dia_chi" => "Bắc Ninh",
                "scmt" => 12002536,
                "chuc_vu" => "Thư ký giám đốc",
                "email" => "thuydt@gmail.com",
                "password" => Hash::make('123456'),
                "phan_quyen" => 0, "sdt"=>"0648484569",
                "created_at"=>date("y-m-d H:i:s"),
                "updated_at"=>date("y-m-d H:i:s"),
            ],
            [
                "ten_nhan_vien" => "Nguyễn Tam Trường An",
                "hinh_anh_nv" => "gaara.jpg",
                "ngay_sinh" => "2002-02-23",
                "dia_chi" => "Thái Bình",
                "scmt" => 12002373,
                "chuc_vu" => "Bếp trưởng điều hành",
                "email" => "anntt@gmail.com",
                "password" => Hash::make('123456'),
                "phan_quyen" => 0, "sdt"=>"0648484598",
                "created_at"=>date("y-m-d H:i:s"),
                "updated_at"=>date("y-m-d H:i:s"),
            ],
            [
                "ten_nhan_vien" => "Trần Minh Hoàng",
                "hinh_anh_nv" => "guy.jpg",
                "ngay_sinh" => "2002-02-02",
                "dia_chi" => "Thái Bình",
                "scmt" => 12002778,
                "chuc_vu" => "Trưởng bộ phận ẩm thực",
                "email" => "hoangtm@gmail.com",
                "password" => Hash::make('123456'),
                "phan_quyen" => 0, "sdt"=>"0648484578",
                "created_at"=>date("y-m-d H:i:s"),
                "updated_at"=>date("y-m-d H:i:s"),
            ],
            [
                "ten_nhan_vien" => "Đinh Trung Nguyên",
                "hinh_anh_nv" => "kakashi.jpg",
                "ngay_sinh" => "2002-02-09",
                "dia_chi" => "Hà Nội",
                "scmt" => 12002698,
                "chuc_vu" => "Trưởng bộ phận lễ tân",
                "email" => "nguyendt@gmail.com",
                "password" => Hash::make('123456'),
                "phan_quyen" => 0, "sdt"=>"0648484367",
                "created_at"=>date("y-m-d H:i:s"),
                "updated_at"=>date("y-m-d H:i:s"),
            ],
            [
                "ten_nhan_vien" => "Đỗ Tiến Thành",
                "hinh_anh_nv" => "avt-boy.jpg",                
                "ngay_sinh" => "2002-06-29",
                "dia_chi" => "Thái Bình",
                "scmt" => 12006323,
                "chuc_vu" => "Trưởng bộ phận buồng phòng",
                "email" => "thanhdt@gmail.com",
                "password" => Hash::make('123456'),
                "phan_quyen" => 0, "sdt"=>"0648484268",
                "created_at"=>date("y-m-d H:i:s"),
                "updated_at"=>date("y-m-d H:i:s"),
            ],
            [
                "ten_nhan_vien" => "Hoàng Văn Hà",
                "hinh_anh_nv" => "avt-boy.jpg",
                "ngay_sinh" => "2002-11-19",
                "dia_chi" => "Thái Bình",
                "scmt" => 12003927,
                "chuc_vu" => "Nhân viên giặt là",
                "email" => "hahv@gmail.com",
                "password" => Hash::make('123456'),
                "phan_quyen" => 0, "sdt"=>"0648484634",
                "created_at"=>date("y-m-d H:i:s"),
                "updated_at"=>date("y-m-d H:i:s"),
            ],
            [
                "ten_nhan_vien" => "Hoàng Văn Hùng",
                "hinh_anh_nv" => "avt-boy.jpg",
                "ngay_sinh" => "2002-10-29",
                "dia_chi" => "Thái Bình",
                "scmt" => 12002123,
                "chuc_vu" => "Nhân viên vệ sinh công cộng",
                "email" => "hunghv@gmail.com",
                "password" => Hash::make('123456'),
                "phan_quyen" => 0, "sdt"=>"0648484369",
                "created_at"=>date("y-m-d H:i:s"),
                "updated_at"=>date("y-m-d H:i:s"),
            ],
            [
                "ten_nhan_vien" => "Dương Thanh Tùng",
                "hinh_anh_nv" => "avt-boy.jpg",
                "ngay_sinh" => "2002-10-15",
                "dia_chi" => "Thái Bình",
                "scmt" => 12002345,
                "chuc_vu" => "Nhân viên lau dọn",
                "email" => "tungdt@gmail.com",
                "password" => Hash::make('123456'),
                "phan_quyen" => 0, "sdt"=>"0648484258",
                "created_at"=>date("y-m-d H:i:s"),
                "updated_at"=>date("y-m-d H:i:s"),
            ],
            [
                "ten_nhan_vien" => "Hoàng Văn Việt",
                "hinh_anh_nv" => "avt-boy.jpg",
                "ngay_sinh" => "2002-11-03",
                "dia_chi" => "Thái Bình",
                "scmt" => 12002124,
                "chuc_vu" => "Nhân viên thu phòng",
                "email" => "viethv@gmail.com",
                "password" => Hash::make('123456'),
                "phan_quyen" => 0, "sdt"=>"0648484258",
                "created_at"=>date("y-m-d H:i:s"),
                "updated_at"=>date("y-m-d H:i:s"),
            ],
            [
                "ten_nhan_vien" => "Nguyễn Xuân Mạnh",
                "hinh_anh_nv" => "avt-boy.jpg",
                "ngay_sinh" => "2002-02-19",
                "dia_chi" => "Thái Bình",
                "scmt" => 12002789,
                "chuc_vu" => "Nhân viên lễ tân",
                "email" => "manhnx@gmail.com",
                "password" => Hash::make('123456'),
                "phan_quyen" => 0, "sdt"=>"0648484258",
                "created_at"=>date("y-m-d H:i:s"),
                "updated_at"=>date("y-m-d H:i:s"),
            ],            
            [
                "ten_nhan_vien" => "Nguyễn Văn Quân",
                "hinh_anh_nv" => "avt-boy.jpg",
                "ngay_sinh" => "2002-08-29",
                "dia_chi" => "Hà Nội",
                "scmt" => 12003548,
                "chuc_vu" => "Nhân viên đặt phòng",
                "email" => "quannv@gmail.com",
                "password" => Hash::make('123456'),
                "phan_quyen" => 0, "sdt"=>"0648484258",
                "created_at"=>date("y-m-d H:i:s"),
                "updated_at"=>date("y-m-d H:i:s"),
            ],
            [
                "ten_nhan_vien" => "Hoàng Văn Quân",
                "hinh_anh_nv" => "avt-boy.jpg",
                "ngay_sinh" => "2002-08-16",
                "dia_chi" => "Thái Bình",
                "scmt" => 12003698,
                "chuc_vu" => "Nhân viên hỗ trợ khách hàng",
                "email" => "quanhv@gmail.com",
                "password" => Hash::make('123456'),
                "phan_quyen" => 0, "sdt"=>"0648484258",
                "created_at"=>date("y-m-d H:i:s"),
                "updated_at"=>date("y-m-d H:i:s"),
            ],
            [
                "ten_nhan_vien" => "Nguyễn Đức Minh Quân",
                "hinh_anh_nv" => "avt-boy.jpg",
                "ngay_sinh" => "2002-01-24",
                "dia_chi" => "Thái Bình",
                "scmt" => 12002998,
                "chuc_vu" => "Nhân viên tiếp thực",
                "email" => "quanndm@gmail.com",
                "password" => Hash::make('123456'),
                "phan_quyen" => 0, "sdt"=>"0648484258",
                "created_at"=>date("y-m-d H:i:s"),
                "updated_at"=>date("y-m-d H:i:s"),
            ],
            [
                "ten_nhan_vien" => "Hoàng Văn Vũ",
                "hinh_anh_nv" => "avt-boy.jpg",
                "ngay_sinh" => "2002-09-13",
                "dia_chi" => "Hà Nội",
                "scmt" => 12002554,
                "chuc_vu" => "Nhân viên tiếp thực",
                "email" => "vuhv@gmail.com",
                "password" => Hash::make('123456'),
                "phan_quyen" => 0, "sdt"=>"0648484258",
                "created_at"=>date("y-m-d H:i:s"),
                "updated_at"=>date("y-m-d H:i:s"),
            ],
            [
                "ten_nhan_vien" => "Nguyễn Tấn Tuân",
                "hinh_anh_nv" => "avt-boy.jpg",
                "ngay_sinh" => "2002-05-28",
                "dia_chi" => "Hải Dương",
                "scmt" => 12002873,
                "chuc_vu" => "Nhân viên pha cà phê",
                "email" => "tuannt@gmail.com",
                "password" => Hash::make('123456'),
                "phan_quyen" => 0, "sdt"=>"0648484258",
                "created_at"=>date("y-m-d H:i:s"),
                "updated_at"=>date("y-m-d H:i:s"),
            ],
            [
                "ten_nhan_vien" => "Tạ Văn Dũng",
                "hinh_anh_nv" => "avt-boy.jpg",
                "ngay_sinh" => "2002-05-03",
                "dia_chi" => "Hải Dương",
                "scmt" => 12002846,
                "chuc_vu" => "Bếp phó",
                "email" => "dungtv@gmail.com",
                "password" => Hash::make('123456'),
                "phan_quyen" => 0, "sdt"=>"0648484258",
                "created_at"=>date("y-m-d H:i:s"),
                "updated_at"=>date("y-m-d H:i:s"),
            ],
            [
                "ten_nhan_vien" => "Nguyễn Tuấn Mạnh",
                "hinh_anh_nv" => "avt-boy.jpg",
                "ngay_sinh" => "2002-04-13",
                "dia_chi" => "Nam Định",
                "scmt" => 12004586,
                "chuc_vu" => "Phụ bếp",
                "email" => "manhnt@gmail.com",
                "password" => Hash::make('123456'),
                "phan_quyen" => 0, "sdt"=>"0648484258",
                "created_at"=>date("y-m-d H:i:s"),
                "updated_at"=>date("y-m-d H:i:s"),
            ],
            [
                "ten_nhan_vien" => "Lê Đức Dũng",
                "hinh_anh_nv" => "avt-boy.jpg",
                "ngay_sinh" => "2002-03-28",
                "dia_chi" => "Hải Dương",
                "scmt" => 12006273,
                "chuc_vu" => "Nhân viên rửa bát",
                "email" => "dungld@gmail.com",
                "password" => Hash::make('123456'),
                "phan_quyen" => 0, "sdt"=>"0648484258",
                "created_at"=>date("y-m-d H:i:s"),
                "updated_at"=>date("y-m-d H:i:s"),
            ],
            [
                "ten_nhan_vien" => "Nguyễn Đức Mạnh",
                "hinh_anh_nv" => "avt-boy.jpg",
                "ngay_sinh" => "2002-07-19",
                "dia_chi" => "Thái Bình",
                "scmt" => 12002623,
                "chuc_vu" => "Giám đốc kinh doanh tiếp thị",
                "email" => "manhnd@gmail.com",
                "password" => Hash::make('123456'),
                "phan_quyen" => 0, "sdt"=>"0648484258",
                "created_at"=>date("y-m-d H:i:s"),
                "updated_at"=>date("y-m-d H:i:s"),
            ],
            [
                "ten_nhan_vien" => "Phạm Thị Phương",
                "hinh_anh_nv" => "avt-girl.jpg",
                "ngay_sinh" => "2002-06-08",
                "dia_chi" => "Phú Thọ",
                "scmt" => 12008545,
                "chuc_vu" => "Quản lý kinh doanh tiếp thị",
                "email" => "phuongpt@gmail.com",
                "password" => Hash::make('123456'),
                "phan_quyen" => 0, "sdt"=>"0648484258",
                "created_at"=>date("y-m-d H:i:s"),
                "updated_at"=>date("y-m-d H:i:s"),
            ],
            [
                "ten_nhan_vien" => "Đào Thị Thảo",
                "hinh_anh_nv" => "avt-girl.jpg",
                "ngay_sinh" => "2002-07-08",
                "dia_chi" => "Hải Phòng",
                "scmt" => 12003655,
                "chuc_vu" => "Nhân viên Marketing",
                "email" => "thaodt@gmail.com",
                "password" => Hash::make('123456'),
                "phan_quyen" => 0, "sdt"=>"0648484258",
                "created_at"=>date("y-m-d H:i:s"),
                "updated_at"=>date("y-m-d H:i:s"),
            ],
            [
                "ten_nhan_vien" => "Phạm Thu Hương",
                "hinh_anh_nv" => "avt-girl.jpg",
                "ngay_sinh" => "2002-09-28",
                "dia_chi" => "Phú Thọ",
                "scmt" => 12003699,
                "chuc_vu" => "Nhân viên PR / Quan hệ khách hàng",
                "email" => "huongpt@gmail.com",
                "password" => Hash::make('123456'),
                "phan_quyen" => 0, "sdt"=>"0648484258",
                "created_at"=>date("y-m-d H:i:s"),
                "updated_at"=>date("y-m-d H:i:s"),
            ],
            [
                "ten_nhan_vien" => "Đỗ thị Dung",
                "hinh_anh_nv" => "avt-girl.jpg",
                "ngay_sinh" => "2002-10-06",
                "dia_chi" => "Hà Nam",
                "scmt" => 12004562,
                "chuc_vu" => "Kế toán trưởng",
                "email" => "dungdt@gmail.com",
                "password" => Hash::make('123456'),
                "phan_quyen" => 0, "sdt"=>"0648484258",
                "created_at"=>date("y-m-d H:i:s"),
                "updated_at"=>date("y-m-d H:i:s"),
            ],
            [
                "ten_nhan_vien" => "Phạm Thu Hà",
                "hinh_anh_nv" => "avt-girl.jpg",
                "ngay_sinh" => "2004-09-28",
                "dia_chi" => "TP.Hồ Chí Minh",
                "scmt" => 12001589,
                "chuc_vu" => "Thủ quỹ",
                "email" => "hapt@gmail.com",
                "password" => Hash::make('123456'),
                "phan_quyen" => 0, "sdt"=>"0648484258",
                "created_at"=>date("y-m-d H:i:s"),
                "updated_at"=>date("y-m-d H:i:s"),
            ],
            [
                "ten_nhan_vien" => "Nguyễn Thị Hường",
                "hinh_anh_nv" => "avt-girl.jpg",
                "ngay_sinh" => "2003-04-28",
                "dia_chi" => "Đà Nẵng",
                "scmt" => 12002915,
                "chuc_vu" => "Nhân viên thu ngân",
                "email" => "huongnt@gmail.com",
                "password" => Hash::make('123456'),
                "phan_quyen" => 0, "sdt"=>"0648484258",
                "created_at"=>date("y-m-d H:i:s"),
                "updated_at"=>date("y-m-d H:i:s"),
            ],
            [
                "ten_nhan_vien" => "Nguyễn Mạnh Kiên",                
                "hinh_anh_nv" => "avt-boy.jpg",
                "ngay_sinh" => "2002-04-28",
                "dia_chi" => "Hà Nội",
                "scmt" => 12001586,
                "chuc_vu" => "Trưởng phòng nhân sự",
                "email" => "kiennm@gmail.com",
                "password" => Hash::make('123456'),
                "phan_quyen" => 0, "sdt"=>"0648484258",
                "created_at"=>date("y-m-d H:i:s"),
                "updated_at"=>date("y-m-d H:i:s"),
            ],
            [
                "ten_nhan_vien" => "Nguyễn Thị Nhung",
                "hinh_anh_nv" => "avt-girl.jpg",
                "ngay_sinh" => "2002-04-03",
                "dia_chi" => "Thái Bình",
                "scmt" => 12006954,
                "chuc_vu" => "Thư ký nhân sự",
                "email" => "nhungnt@gmail.com",
                "password" => Hash::make('123456'),
                "phan_quyen" => 0, "sdt"=>"0648484258",
                "created_at"=>date("y-m-d H:i:s"),
                "updated_at"=>date("y-m-d H:i:s"),
            ],
            [
                "ten_nhan_vien" => "Tạ Duy Quân",
                "hinh_anh_nv" => "avt-boy.jpg",
                "ngay_sinh" => "2003-04-28",
                "dia_chi" => "Bình Dương",
                "scmt" => 12008515,
                "chuc_vu" => "Nhân viên nhân sự",
                "email" => "quantd@gmail.com",
                "password" => Hash::make('123456'),
                "phan_quyen" => 0, "sdt"=>"0648484258",
                "created_at"=>date("y-m-d H:i:s"),
                "updated_at"=>date("y-m-d H:i:s"),
            ],
            [
                "ten_nhan_vien" => "Tạ Duy Dũng",
                "hinh_anh_nv" => "avt-boy.jpg",
                "ngay_sinh" => "2002-09-18",
                "dia_chi" => "Hải Dương",
                "scmt" => 12003690,
                "chuc_vu" => "Giám đốc bộ phận kỹ thuật",
                "email" => "dungtd@gmail.com",
                "password" => Hash::make('123456'),
                "phan_quyen" => 0, "sdt"=>"0648484258",
                "created_at"=>date("y-m-d H:i:s"),
                "updated_at"=>date("y-m-d H:i:s"),
            ],
            [
                "ten_nhan_vien" => "Tạ Mạnh Quân",
                "hinh_anh_nv" => "avt-boy.jpg",
                "ngay_sinh" => "2003-12-28",
                "dia_chi" => "Bình Dương",
                "scmt" => 12006392,
                "chuc_vu" => "Nhân viên điện",
                "email" => "quantm@gmail.com",
                "password" => Hash::make('123456'),
                "phan_quyen" => 0, "sdt"=>"0648484258",
                "created_at"=>date("y-m-d H:i:s"),
                "updated_at"=>date("y-m-d H:i:s"),
            ],
            [
                "ten_nhan_vien" => "Đào Duy Quân",
                "hinh_anh_nv" => "avt-boy.jpg",
                "ngay_sinh" => "2003-07-23",
                "dia_chi" => "Hà Nam",
                "scmt" => 12002684,
                "chuc_vu" => "Nhân viên nước",
                "email" => "quandd@gmail.com",
                "password" => Hash::make('123456'),
                "phan_quyen" => 0, "sdt"=>"0648484258",
                "created_at"=>date("y-m-d H:i:s"),
                "updated_at"=>date("y-m-d H:i:s"),
            ],
            [
                "ten_nhan_vien" => "Tạ Duy Luật",
                "hinh_anh_nv" => "avt-boy.jpg",
                "ngay_sinh" => "2002-04-30",
                "dia_chi" => "Hải Phòng",
                "scmt" => 12003624,
                "chuc_vu" => "Trưởng bộ phận IT",
                "email" => "luantd@gmail.com",
                "password" => Hash::make('123456'),
                "phan_quyen" => 0, "sdt"=>"0648484258",
                "created_at"=>date("y-m-d H:i:s"),
                "updated_at"=>date("y-m-d H:i:s"),
            ],
            [
                "ten_nhan_vien" => "Hoàng Quốc Vinh",
                "hinh_anh_nv" => "avt-boy.jpg",
                "ngay_sinh" => "2004-1-30",
                "dia_chi" => "Hà Nam",
                "scmt" => 12002986,
                "chuc_vu" => "Nhân viên IT",
                "email" => "vinhhq@gmail.com",
                "password" => Hash::make('123456'),
                "phan_quyen" => 0, "sdt"=>"0648484258",
                "created_at"=>date("y-m-d H:i:s"),
                "updated_at"=>date("y-m-d H:i:s"),
            ],
            [
                "ten_nhan_vien" => "Tạ Mạnh Hào",
                "hinh_anh_nv" => "avt-boy.jpg",
                "ngay_sinh" => "2002-02-20",
                "dia_chi" => "Bắc Ninh",
                "scmt" => 12001624,
                "chuc_vu" => "Nhân viên thiết kế đồ họa",
                "email" => "haotm@gmail.com",
                "password" => Hash::make('123456'),
                "phan_quyen" => 0, "sdt"=>"0648484258",
                "created_at"=>date("y-m-d H:i:s"),
                "updated_at"=>date("y-m-d H:i:s"),
            ],
            [
                "ten_nhan_vien" => "Đỗ Đình Hoàng",
                "hinh_anh_nv" => "avt-boy.jpg",
                "ngay_sinh" => "2002-04-06",
                "dia_chi" => "Hải Phòng",
                "scmt" => 12003624,
                "chuc_vu" => "Trưởng bộ phận an ninh",
                "email" => "hoangdd@gmail.com",
                "password" => Hash::make('123456'),
                "phan_quyen" => 0, "sdt"=>"0648484258",
                "created_at"=>date("y-m-d H:i:s"),
                "updated_at"=>date("y-m-d H:i:s"),
            ],
            [
                "ten_nhan_vien" => "Đỗ Huy Hoàng",
                "hinh_anh_nv" => "avt-boy.jpg",
                "ngay_sinh" => "2005-04-06",
                "dia_chi" => "Hải Phòng",
                "scmt" => 12009642,
                "chuc_vu" => "Nhân viên bảo vệ",
                "email" => "hoangdh@gmail.com",
                "password" => Hash::make('123456'),
                "phan_quyen" => 0, "sdt"=>"0648484258",
                "created_at"=>date("y-m-d H:i:s"),
                "updated_at"=>date("y-m-d H:i:s"),
            ],
            [
                "ten_nhan_vien" => "Trần Quốc Quân",
                "hinh_anh_nv" => "avt-boy.jpg",
                "ngay_sinh" => "2003-03-06",
                "dia_chi" => "Hải Dương",
                "scmt" => 12002684,
                "chuc_vu" => "Nhân viên cứu hộ",
                "email" => "quantq@gmail.com",
                "password" => Hash::make('123456'),
                "phan_quyen" => 0, "sdt"=>"0648484258",
                "created_at"=>date("y-m-d H:i:s"),
                "updated_at"=>date("y-m-d H:i:s"),
            ],
        ];
        DB::table('users')->insert($users);
        
        //bảng khách hàng
        $khachHang= [
        ];
        for($i=1;$i<10;$i++){
            $khachHang[]= [
                "ten_khach_hang" => "Nguyễn Đình Huân".$i,
                "tuoi" => 20,
                "dia_chi" => "10".$i.", Nguyên Xá, Minh Khai, Bắc Từ Liêm, Hà Nội",
                "scmt" => 13458456,
                "sdt" => "096666666".$i,
                "ngay_thue" => "2022-07-21",
                "ngay_tra" => "2022-07-23",

                "created_at"=>date("y-m-d H:i:s"),
                "updated_at"=>date("y-m-d H:i:s"),
            ];
        }
        DB::table('khach_hang')->insert($khachHang);

        //bảng hóa đơn
        $hoaDon= [
        ];
        for($i=1;$i<10;$i++){
            $hoaDon[]= [
                "ten_hoa_don" => "Hóa đơn số ".$i,
                "ma_khach_hang" => $i,
                "so_ngay"  => $i,
                "tong_tien" =>3000,
                
                "created_at"=>date("y-m-d H:i:s"),
                "updated_at"=>date("y-m-d H:i:s"),
            ];
        }
        DB::table('hoa_don')->insert($hoaDon);

    }
}
