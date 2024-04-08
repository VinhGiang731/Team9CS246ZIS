
import java.util.ArrayList;

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */

/**
 *
 * @author Admin
 */
public class ngayDiVaVe {
    static ArrayList<Integer> l = new ArrayList<>();
    
    public static ArrayList<Integer> getNgayDiVaVe(){
        for(int i=1;i<=31;i++)
        {
            l.add(i);
        }
        return l;
    }
}
