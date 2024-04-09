
import java.util.ArrayList;

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */

/**
 *
 * @author Admin
 */
import java.util.ArrayList;

public class thongTinChuyenBay 
{
    private ArrayList<String> diaDiemDi = new ArrayList<>();
    private ArrayList<String> diaDiemDen = new ArrayList<>();

    public thongTinChuyenBay() {
        // Thêm các địa điểm đi và địa điểm đến vào danh sách
        diaDiemDi.add("Hồ Chí Minh");
        diaDiemDi.add("Đà Nẵng");
        diaDiemDi.add("Hà Nội");
        diaDiemDi.add("Hải Phòng");
        diaDiemDi.add("Đà Lạt");

        diaDiemDen.add("Sài Gòn");
        diaDiemDen.add("Huế");
        diaDiemDen.add("Hà Nội");
        diaDiemDen.add("Nha Trang");
        diaDiemDen.add("Đà Lạt");
    }

    public void show() 
    {
        System.out.println("Thông tin chuyến bay:");
        System.out.println("Địa điểm đi: ");
        for(String diaDiem : diaDiemDi)
        {
            System.out.println(diaDiem);
        }
        System.out.println("Địa điểm đến: ");
        for(String diaDiem : diaDiemDen) 
        {
            System.out.println(diaDiem);
        }
    }

    public boolean checkChuyenBay(String diaDiemDi, String diaDiemDen) 
    {
        // Kiểm tra sự khớp giữa địa điểm đi và địa điểm đến
        return this.diaDiemDi.contains(diaDiemDi) && this.diaDiemDen.contains(diaDiemDen);
    }

    public void kiemTraVaIn(String diaDiemDi, String diaDiemDen) 
    {
        if(checkChuyenBay(diaDiemDi, diaDiemDen) && diaDiemDen.equals("Hà Nội")) 
        {
            System.out.println("Chuyến bay từ " + diaDiemDi + " đến " + diaDiemDen + " có sẵn. Đặt vé ngay!");
        } 
        else 
        {
            System.out.println("Chuyến bay từ " + diaDiemDi + " đến " + diaDiemDen + " không có sẵn.");
        }
    }

    public static void main(String[] args) {
        thongTinChuyenBay chuyenBay = new thongTinChuyenBay();
        chuyenBay.show();

        // Ví dụ kiểm tra và in thông báo nếu địa điểm đến là "Hà Nội"
        String diemDi = "Hồ Chí Minh";
        String diemDen = "Hà Nội";
        chuyenBay.kiemTraVaIn(diemDi, diemDen);
    }
}