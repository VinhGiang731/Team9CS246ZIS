/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */

/**
 *
 * @author Admin
 */
public class checkData {
    boolean kiemTra(int nam)
    {
        return (nam%4==0 && nam%100 !=0) || (nam%400==0); 
    }
    int timSoNgayTrongThang(int thang, int nam)
    {
        int kt=0;
        if(thang==1 || thang==3 || thang==5 || thang==7 || thang==8 || thang==10 || thang==12 )
        {
            kt = 31;
        }
        else if(thang==2)
        {
            boolean check=kiemTra(nam);
            if(check)
            {
                kt=29;
            }
            else 
            {
                kt=28;
            }
        }
        else 
        {
            kt=30;
        }
        
        return kt;
    }
}
