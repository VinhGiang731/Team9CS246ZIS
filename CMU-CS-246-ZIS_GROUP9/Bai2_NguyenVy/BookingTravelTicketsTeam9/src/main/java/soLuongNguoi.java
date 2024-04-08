
import java.util.ArrayList;

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */

/**
 *
 * @author Admin
 */
public class soLuongNguoi {
    static ArrayList<Integer> l = new ArrayList<>();
    
    public static ArrayList<Integer> getSoLuong(){
        for(int i=0;i<=100;i++)
        {
            l.add(i);
        }
        return l;
    }
}
