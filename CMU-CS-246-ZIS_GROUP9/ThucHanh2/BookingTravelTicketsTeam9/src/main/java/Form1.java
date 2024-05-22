
import java.text.SimpleDateFormat;
import java.util.ArrayList;
import java.util.Calendar;
import java.util.Date;
import java.util.HashSet;
import java.util.Set;
import java.util.logging.SimpleFormatter;

public class Form1 extends javax.swing.JFrame {
    
    public Form1() {
        initComponents();
        showComBodiaDiemDi();
        showComBodiaDiemDen();
//        showComBoNgayDi();
        showComBoSoLuongNguoi();
    }
    
    @SuppressWarnings("unchecked")
    // <editor-fold defaultstate="collapsed" desc="Generated Code">//GEN-BEGIN:initComponents
    private void initComponents() {

        jLabel1 = new javax.swing.JLabel();
        jLabel2 = new javax.swing.JLabel();
        jComboBox1 = new javax.swing.JComboBox<>();
        jComboBox2 = new javax.swing.JComboBox<>();
        jLabel4 = new javax.swing.JLabel();
        jLabel3 = new javax.swing.JLabel();
        jLabel5 = new javax.swing.JLabel();
        jComboBox3 = new javax.swing.JComboBox<>();
        jComboBox4 = new javax.swing.JComboBox<>();
        jLabel6 = new javax.swing.JLabel();
        jLabel7 = new javax.swing.JLabel();
        jLabel8 = new javax.swing.JLabel();
        jComboBox8 = new javax.swing.JComboBox<>();
        jLabel9 = new javax.swing.JLabel();
        jLabel10 = new javax.swing.JLabel();
        jLabel11 = new javax.swing.JLabel();
        jButton1 = new javax.swing.JButton();
        jLabel12 = new javax.swing.JLabel();
        jDateChooser1 = new com.toedter.calendar.JDateChooser();
        jDateChooser2 = new com.toedter.calendar.JDateChooser();
        jLabel13 = new javax.swing.JLabel();

        setDefaultCloseOperation(javax.swing.WindowConstants.EXIT_ON_CLOSE);
        setResizable(false);
        getContentPane().setLayout(new org.netbeans.lib.awtextra.AbsoluteLayout());

        jLabel1.setFont(new java.awt.Font("Segoe UI Variable", 1, 24)); // NOI18N
        jLabel1.setText("VÉ MÁY BAY");
        getContentPane().add(jLabel1, new org.netbeans.lib.awtextra.AbsoluteConstraints(50, 30, 226, 30));

        jLabel2.setFont(new java.awt.Font("Segoe UI", 1, 14)); // NOI18N
        jLabel2.setText("Điểm đi");
        getContentPane().add(jLabel2, new org.netbeans.lib.awtextra.AbsoluteConstraints(50, 80, 57, -1));

        jComboBox1.setToolTipText("\n");
        jComboBox1.addActionListener(new java.awt.event.ActionListener() {
            public void actionPerformed(java.awt.event.ActionEvent evt) {
                jComboBox1ActionPerformed(evt);
            }
        });
        getContentPane().add(jComboBox1, new org.netbeans.lib.awtextra.AbsoluteConstraints(50, 110, 140, -1));

        jComboBox2.addActionListener(new java.awt.event.ActionListener() {
            public void actionPerformed(java.awt.event.ActionEvent evt) {
                jComboBox2ActionPerformed(evt);
            }
        });
        getContentPane().add(jComboBox2, new org.netbeans.lib.awtextra.AbsoluteConstraints(270, 110, 130, -1));

        jLabel4.setFont(new java.awt.Font("Segoe UI", 1, 14)); // NOI18N
        jLabel4.setText("Ngày đi");
        getContentPane().add(jLabel4, new org.netbeans.lib.awtextra.AbsoluteConstraints(50, 150, 60, -1));

        jLabel3.setFont(new java.awt.Font("Segoe UI", 1, 14)); // NOI18N
        jLabel3.setText("Điểm đến");
        getContentPane().add(jLabel3, new org.netbeans.lib.awtextra.AbsoluteConstraints(270, 80, 70, -1));

        jLabel5.setFont(new java.awt.Font("Segoe UI", 1, 14)); // NOI18N
        jLabel5.setText("Ngày về");
        getContentPane().add(jLabel5, new org.netbeans.lib.awtextra.AbsoluteConstraints(270, 150, 65, -1));

        jComboBox3.setToolTipText("");
        jComboBox3.addActionListener(new java.awt.event.ActionListener() {
            public void actionPerformed(java.awt.event.ActionEvent evt) {
                jComboBox3ActionPerformed(evt);
            }
        });
        getContentPane().add(jComboBox3, new org.netbeans.lib.awtextra.AbsoluteConstraints(140, 240, 100, -1));

        jComboBox4.addActionListener(new java.awt.event.ActionListener() {
            public void actionPerformed(java.awt.event.ActionEvent evt) {
                jComboBox4ActionPerformed(evt);
            }
        });
        getContentPane().add(jComboBox4, new org.netbeans.lib.awtextra.AbsoluteConstraints(140, 280, 100, -1));

        jLabel6.setFont(new java.awt.Font("Segoe UI", 1, 14)); // NOI18N
        jLabel6.setText("Người lớn");
        getContentPane().add(jLabel6, new org.netbeans.lib.awtextra.AbsoluteConstraints(50, 240, -1, -1));

        jLabel7.setFont(new java.awt.Font("Segoe UI", 1, 14)); // NOI18N
        jLabel7.setText("Trẻ em");
        getContentPane().add(jLabel7, new org.netbeans.lib.awtextra.AbsoluteConstraints(50, 280, 50, -1));

        jLabel8.setFont(new java.awt.Font("Segoe UI", 1, 14)); // NOI18N
        jLabel8.setText("Em bé");
        getContentPane().add(jLabel8, new org.netbeans.lib.awtextra.AbsoluteConstraints(50, 320, 50, -1));

        jComboBox8.addActionListener(new java.awt.event.ActionListener() {
            public void actionPerformed(java.awt.event.ActionEvent evt) {
                jComboBox8ActionPerformed(evt);
            }
        });
        getContentPane().add(jComboBox8, new org.netbeans.lib.awtextra.AbsoluteConstraints(140, 320, 100, -1));

        jLabel9.setFont(new java.awt.Font("Segoe UI", 1, 12)); // NOI18N
        jLabel9.setText("(Từ 16 tuổi trở lên)");
        getContentPane().add(jLabel9, new org.netbeans.lib.awtextra.AbsoluteConstraints(270, 240, 109, -1));

        jLabel10.setFont(new java.awt.Font("Segoe UI", 1, 12)); // NOI18N
        jLabel10.setText("(Từ 7 đến 16 tuổi)");
        getContentPane().add(jLabel10, new org.netbeans.lib.awtextra.AbsoluteConstraints(270, 280, 110, -1));

        jLabel11.setFont(new java.awt.Font("Segoe UI", 1, 12)); // NOI18N
        jLabel11.setText("(Dưới 7 tuổi)");
        getContentPane().add(jLabel11, new org.netbeans.lib.awtextra.AbsoluteConstraints(270, 320, 110, -1));

        jButton1.setFont(new java.awt.Font("Serif", 1, 14)); // NOI18N
        jButton1.setText("Tìm Chuyến Bay");
        jButton1.addActionListener(new java.awt.event.ActionListener() {
            public void actionPerformed(java.awt.event.ActionEvent evt) {
                jButton1ActionPerformed(evt);
            }
        });
        getContentPane().add(jButton1, new org.netbeans.lib.awtextra.AbsoluteConstraints(295, 380, 150, 47));

        jLabel12.setFont(new java.awt.Font("Segoe UI", 1, 14)); // NOI18N
        jLabel12.setForeground(new java.awt.Color(255, 0, 51));
        getContentPane().add(jLabel12, new org.netbeans.lib.awtextra.AbsoluteConstraints(10, 390, 280, 30));

        jDateChooser1.setDateFormatString("dd-MM-yyyy");
        jDateChooser1.setDoubleBuffered(false);
        getContentPane().add(jDateChooser1, new org.netbeans.lib.awtextra.AbsoluteConstraints(50, 180, 140, 20));

        jDateChooser2.setDateFormatString("dd-MM-yyyy");
        getContentPane().add(jDateChooser2, new org.netbeans.lib.awtextra.AbsoluteConstraints(270, 180, 130, -1));

        jLabel13.setIcon(new javax.swing.ImageIcon(getClass().getResource("/image/background.jpg"))); // NOI18N
        getContentPane().add(jLabel13, new org.netbeans.lib.awtextra.AbsoluteConstraints(0, -180, 490, 660));

        pack();
    }// </editor-fold>//GEN-END:initComponents

    //code G làm
    public String getTextCB1(java.awt.event.ActionEvent evt) {
        String s = (String) jComboBox1.getSelectedItem();
        return s;
    }
    
    public String getTextCB2(java.awt.event.ActionEvent evt) {
        String s = (String) jComboBox2.getSelectedItem();
        return s;
    }

    private void jButton1ActionPerformed(java.awt.event.ActionEvent evt) {//GEN-FIRST:event_jButton1ActionPerformed
        
        String selecDiemDi = String.valueOf(jComboBox1.getSelectedItem());
        String selecDiemDen = String.valueOf(jComboBox2.getSelectedItem());
        // Lấy ngày, tháng, năm từ jDateChooser1
        Date selectedDate1 = jDateChooser1.getDate();
        SimpleDateFormat dateFormat = new SimpleDateFormat("dd/MM/yyyy");
        String selecNgayThangNam1 = dateFormat.format(selectedDate1);
        
        Date selectedDate2 = jDateChooser2.getDate();
        String selecNgayThangNam2 = dateFormat.format(selectedDate2);

        // lấy dữ liệu của người lớn , trẻ em và em bé 
        String selecNguoiLon = String.valueOf(jComboBox3.getSelectedItem());
        String selecTreEm = String.valueOf(jComboBox4.getSelectedItem());
        String selecEmBe = String.valueOf(jComboBox8.getSelectedItem());
        
        if (!selecDiemDi.equals(selecDiemDen) && !selecDiemDi.equals("") && !selecDiemDen.equals("")) {
            if (!selecNgayThangNam1.equals("00/00/0000") && !selecNgayThangNam2.equals("00/00/0000") && selectedDate1.compareTo(selectedDate2) < 0) {
                if (!selecNguoiLon.equals("0") || !selecTreEm.equals("0")) {
                    jLabel12.setText("");
                    Ticket T = new Ticket();
                    T.getDataTravel(getTextCB1(evt), getTextCB2(evt));
                    T.setTitle("Bảng vé");
                    T.pack();
                    T.setLocationRelativeTo(null);
                    T.setDefaultCloseOperation(EXIT_ON_CLOSE);
                    T.setVisible(true);
                } else if (selecNguoiLon.equals("0") && selecTreEm.equals("0") && !selecEmBe.equals("0")) {
                    jLabel12.setText("Em bé không thể bay một mình!!!");
                } else {
                    jLabel12.setText("Vui lòng nhập số lượng người đi!!!");
                }
            } else {
                jLabel12.setText("Vui lòng kiểm tra lại thời gian bay!!!");
            }
        } else if( selecDiemDen.equals(selecDiemDi) ){
            jLabel12.setText("Vui lòng nhập đầy đủ thông tin!!!");
        } else{
            jLabel12.setText("Vui lòng nhập đầy đủ thông tin!!!");
        }

//        if ((!selecDiemDi.equals("") && !selecDiemDen.equals("")) && (Integer.parseInt(selecNguoiLon) != 0 && Integer.parseInt(selecTreEm) != 0) && (!(String.valueOf(selectedDate1)).equals("") && !(String.valueOf(selectedDate2)).equals(""))) {
//            if (selectedDate1.compareTo(selectedDate2) < 0) {
//                jLabel12.setText("");
//                Ticket T = new Ticket();
//                T.getDataTravel(getTextCB1(evt), getTextCB2(evt));
//                T.setTitle("Bảng vé");
//                T.pack();
//                T.setLocationRelativeTo(null);
//                T.setDefaultCloseOperation(EXIT_ON_CLOSE);
//                T.setVisible(true);
//            } else {
//                jLabel12.setText("Ngày đi và ngày về không hợp lệ!!!");
//            }
//        } else {
//            jLabel12.setText("Vui lòng nhập đầy đủ thông tin!!!");
//        }
//        if(selecDiemDi.trim().equals("Đà Nẵng") && selecDiemDen.trim().equals("Hồ Chí Minh")) 
//        {
//            if(selecNgayThangNam!=null)
//            {
//                Ticket T = new Ticket();
//                T.getDataTravel(getTextCB1(evt), getTextCB2(evt));
//                T.setTitle("Bảng vé");
//                T.pack();
//                T.setLocationRelativeTo(null);
//                T.setDefaultCloseOperation(EXIT_ON_CLOSE);
//                T.setVisible(true);
//            }
//            else 
//            {
//                // sai thì báo lỗi 
//                jLabel12.setText(" Chưa chọn ngày tháng năm ");
//            }
//        }
//        else if(selecDiemDi.trim().equals("Hà Nội") && selecDiemDen.trim().equals("Hải Phòng"))
//        {
//            if(selecNgayThangNam!=null)
//            {
//                Ticket T = new Ticket();
//                T.getDataTravel(getTextCB1(evt), getTextCB2(evt));
//                T.setTitle("Bảng vé");
//                T.pack();
//                T.setLocationRelativeTo(null);
//                T.setDefaultCloseOperation(EXIT_ON_CLOSE);
//                T.setVisible(true);
//            }
//            else 
//            {
//                // sai thì báo lỗi 
//                jLabel12.setText(" Chưa chọn ngày tháng năm. ");
//            }
//        }
//        else 
//        {
//            jLabel12.setText(" Hiện tại Chưa có chuyến bay ! ");
//        }
//        ArrayList<String> l = diaDiemDI.getdiaDiemDI();
//        ArrayList<String> l1 = diaDiemDen.getdiaDiemDen();
//        ArrayList<Integer> l2 = ngayDiVaVe.getNgayDiVaVe();
//        thongTinChuyenBay chuyenBay = new thongTinChuyenBay();
//
//        String selecDiemDi = (String) jComboBox1.getSelectedItem();
//        String selecDiemDen = (String) jComboBox2.getSelectedItem();
//
//        String selecNgayDi = (String) jComboBox3.getSelectedItem();
//        Date selecThangDi = jDateChooser1.getDate();
//        String selecNgayVe = (String) jComboBox4.getSelectedItem();
//        Date selecThangVe = jDateChooser2.getDate();
//
//        String selecNguoiLon = (String) jComboBox7.getSelectedItem();
//        String selecTreEm = (String) jComboBox8.getSelectedItem();
//        String selecEmBe = (String) jComboBox9.getSelectedItem();
//        try{
//            Set<String> uniqueSet = new HashSet<>(l);
//            String src = String.join("\n", uniqueSet);
//            if(selecDiemDi!=null && selecDiemDen!=null)
//            {
//                if(selecDiemDi.trim().equals("Đà Nẵng") && selecDiemDen.trim().equals("Hồ Chí Minh"))
//                {
//                    diemdi1.setText(selecDiemDi);
//                    diemden2.setText(selecDiemDen);
//                    ngaydi.setText(selecNgayDi);
//                    thangdi.setText(selecNgayVe);
//                    nguoilon.setText(selecNguoiLon);
//                    treEm.setText(selecTreEm);
//                    TreNho.setText(selecEmBe);
//
//                    Calendar calendar = Calendar.getInstance();
//
//                    calendar.setTime(selecThangDi);
//                    int month = calendar.get(Calendar.MONTH) + 1;
//                    int year = calendar.get(Calendar.YEAR);
//
//                    String formattedDate = String.format("%02d/%04d", month, year);
//                    ngayve.setText(formattedDate);
//
//                    calendar.setTime(selecThangVe);
//                    int month1 = calendar.get(Calendar.MONTH) + 1;
//                    int year1 = calendar.get(Calendar.YEAR);
//
//                    String formattedDate1 = String.format("%02d/%04d", month1, year1);
//                    thangve.setText(formattedDate1);
//
//                }
//                else
//                {
//                    diemdi1.setText(" Chưa có thông tin ");
//                    diemden2.setText(" Chưa có thông tin");
//                }
//            }
//
//        }
//        catch (Exception e)
//        {
//
//        }
    }//GEN-LAST:event_jButton1ActionPerformed

    private void jComboBox3ActionPerformed(java.awt.event.ActionEvent evt) {//GEN-FIRST:event_jComboBox3ActionPerformed

    }//GEN-LAST:event_jComboBox3ActionPerformed

    private void jComboBox4ActionPerformed(java.awt.event.ActionEvent evt) {//GEN-FIRST:event_jComboBox4ActionPerformed
        // TODO add your handling code here:
    }//GEN-LAST:event_jComboBox4ActionPerformed

    private void jComboBox8ActionPerformed(java.awt.event.ActionEvent evt) {//GEN-FIRST:event_jComboBox8ActionPerformed
        // TODO add your handling code here:
    }//GEN-LAST:event_jComboBox8ActionPerformed

    private void jComboBox2ActionPerformed(java.awt.event.ActionEvent evt) {//GEN-FIRST:event_jComboBox2ActionPerformed
        //        String selectedValue = (String) jComboBox2.getSelectedItem();
        //
        //        if (selectedValue != null)
        //        {
        //
        //            if(selectedValue.trim().equals("Đà Nẵng"))
        //            {
        //                diemden.setText(" đó là đà nẵng ");
        //            }
        //            else if(selectedValue.trim().equals("Hà Nội"))
        //            {
        //                diemden.setText(" đó là hà nội");
        //            }
        //            else if(selectedValue.trim().equals("Hồ Chí Minh"))
        //            {
        //                diemden.setText(" đó là Hồ Chí Minh");
        //            }
        //            else if(selectedValue.trim().equals("Hải Phòng"))
        //            {
        //                diemden.setText(" đó là Hải Phòng");
        //            }
        //            else if(selectedValue.trim().equals("Đà Lạt"))
        //            {
        //                diemden.setText(" đó là Đà Lạt");
        //            }
        //        }
    }//GEN-LAST:event_jComboBox2ActionPerformed

    private void jComboBox1ActionPerformed(java.awt.event.ActionEvent evt) {//GEN-FIRST:event_jComboBox1ActionPerformed
        //        String selectedValue = (String) jComboBox1.getSelectedItem();
        //
        //        if (selectedValue != null)
        //        {
        //            if(selectedValue.trim().equals("Đà Nẵng"))
        //            {
        //                diemdi.setText(" đó là đà nẵng ");
        //            }
        //            else if(selectedValue.trim().equals("Hà Nội"))
        //            {
        //                diemdi.setText(" đó là hà nội");
        //            }
        //            else if(selectedValue.trim().equals("Hồ Chí Minh"))
        //            {
        //                diemdi.setText(" đó là Hồ Chí Minh");
        //            }
        //            else if(selectedValue.trim().equals("Hải Phòng"))
        //            {
        //                diemdi.setText(" đó là Hải Phòng");
        //            }
        //            else if(selectedValue.trim().equals("Đà Lạt"))
        //            {
        //                diemdi.setText(" đó là Đà Lạt");
        //            }
        //        }
    }//GEN-LAST:event_jComboBox1ActionPerformed

    /**
     * @param args the command line arguments
     */
    public static void main(String args[]) {
        /* Set the Nimbus look and feel */
        //<editor-fold defaultstate="collapsed" desc=" Look and feel setting code (optional) ">
        /* If Nimbus (introduced in Java SE 6) is not available, stay with the default look and feel.
         * For details see http://download.oracle.com/javase/tutorial/uiswing/lookandfeel/plaf.html 
         */
        try {
            for (javax.swing.UIManager.LookAndFeelInfo info : javax.swing.UIManager.getInstalledLookAndFeels()) {
                if ("Nimbus".equals(info.getName())) {
                    javax.swing.UIManager.setLookAndFeel(info.getClassName());
                    break;
                }
            }
        } catch (ClassNotFoundException ex) {
            java.util.logging.Logger.getLogger(Form1.class.getName()).log(java.util.logging.Level.SEVERE, null, ex);
        } catch (InstantiationException ex) {
            java.util.logging.Logger.getLogger(Form1.class.getName()).log(java.util.logging.Level.SEVERE, null, ex);
        } catch (IllegalAccessException ex) {
            java.util.logging.Logger.getLogger(Form1.class.getName()).log(java.util.logging.Level.SEVERE, null, ex);
        } catch (javax.swing.UnsupportedLookAndFeelException ex) {
            java.util.logging.Logger.getLogger(Form1.class.getName()).log(java.util.logging.Level.SEVERE, null, ex);
        }
        //</editor-fold>
        //</editor-fold>

        /* Create and display the form */
        java.awt.EventQueue.invokeLater(new Runnable() {
            public void run() {
                new Form1().setVisible(true);
            }
        });
    }

    // Variables declaration - do not modify//GEN-BEGIN:variables
    private javax.swing.JButton jButton1;
    private javax.swing.JComboBox<String> jComboBox1;
    private javax.swing.JComboBox<String> jComboBox2;
    private javax.swing.JComboBox<String> jComboBox3;
    private javax.swing.JComboBox<String> jComboBox4;
    private javax.swing.JComboBox<String> jComboBox8;
    private com.toedter.calendar.JDateChooser jDateChooser1;
    private com.toedter.calendar.JDateChooser jDateChooser2;
    private javax.swing.JLabel jLabel1;
    private javax.swing.JLabel jLabel10;
    private javax.swing.JLabel jLabel11;
    private javax.swing.JLabel jLabel12;
    private javax.swing.JLabel jLabel13;
    private javax.swing.JLabel jLabel2;
    private javax.swing.JLabel jLabel3;
    private javax.swing.JLabel jLabel4;
    private javax.swing.JLabel jLabel5;
    private javax.swing.JLabel jLabel6;
    private javax.swing.JLabel jLabel7;
    private javax.swing.JLabel jLabel8;
    private javax.swing.JLabel jLabel9;
    // End of variables declaration//GEN-END:variables

    // show dữ liệu của địa điểm đi
    private void showComBodiaDiemDi() {
        ArrayList<String> l = diaDiemDI.getdiaDiemDI();
        for (String string : l) {
            jComboBox1.addItem(string);
        }
    }

    // show dữ liệu địa điểm đến 
    private void showComBodiaDiemDen() {
        ArrayList<String> l = diaDiemDen.getdiaDiemDen();
        for (String string : l) {
            jComboBox2.addItem(string);
        }
    }
    // show dữ liệu của ngày đi
//    private void showComBoNgayDi() {
//        ArrayList<Integer> l = ngayDiVaVe.getNgayDiVaVe();
//        for(int s : l)
//        {
//            jComboBox1.addItem(Integer.toString(s));
//            jComboBox2.addItem(Integer.toString(s));
//        }
//    }

    private void showComBoSoLuongNguoi() {
        ArrayList<Integer> l = soLuongNguoi.getSoLuong();
        for (int s : l) {
            jComboBox3.addItem(Integer.toString(s));
            jComboBox4.addItem(Integer.toString(s));
            jComboBox8.addItem(Integer.toString(s));
        }
    }
    
}
