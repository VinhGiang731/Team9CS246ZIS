
import java.awt.BorderLayout;
import java.awt.Color;
import java.awt.GridLayout;
import javax.swing.JButton;
import javax.swing.JFrame;
import javax.swing.JLabel;
import javax.swing.JPanel;
import javax.swing.JTextField;


public class FormHieu extends JFrame {
    private JTextField txt1;
    private JTextField txt2;
    private JLabel kq;
    private JLabel title;
    private JButton bt1;
    private JButton bt2;
    private JLabel value1;
    private JLabel value2;
    private JLabel value3;

    
    public FormHieu() {
        initComponents();
    }

    @SuppressWarnings("unchecked")
    // <editor-fold defaultstate="collapsed" desc="Generated Code">//GEN-BEGIN:initComponents
    private void initComponents() {

        setDefaultCloseOperation(javax.swing.WindowConstants.EXIT_ON_CLOSE);

        javax.swing.GroupLayout layout = new javax.swing.GroupLayout(getContentPane());
        getContentPane().setLayout(layout);
        layout.setHorizontalGroup(
            layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addGap(0, 400, Short.MAX_VALUE)
        );
        layout.setVerticalGroup(
            layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addGap(0, 300, Short.MAX_VALUE)
        );

        pack();
    }// </editor-fold>//GEN-END:initComponents

    public void jbuttonForm(java.awt.ActiveEvent evt){
        this.setLayout(new BorderLayout());
        
        JPanel jpHead = new JPanel();
        title.setText("Phep Hieu");
        jpHead.add(title);
        
        JPanel jpCenter = new JPanel(new GridLayout(3,2));
        kq.setBackground(Color.BLACK);
        value1.setText("Value 1: ");
        value2.setText("Value 2: ");
        txt1.setText("");
        txt2.setText("");
        kq.setText("");
        
        jpCenter.add(value1);
        jpCenter.add(txt1);
        jpCenter.add(value2);
        jpCenter.add(txt2);
        jpCenter.add(value3);
        jpCenter.add(kq);
        
        JPanel jpSouth = new JPanel(new GridLayout(2,2));
        
        bt1.setText("Kết quả");
        bt2.setText("Làm mới");
        
        jpSouth.add(bt1);
        jpSouth.add(bt2);
        
    }
    
    private void jButtonAction(java.awt.event.ActionEvent evt){
        try {
            int number1 = Integer.parseInt(txt1.getText());
            int number2 = Integer.parseInt(txt2.getText());
            int number3 = number1 + number2;
            kq.setText(number3+"");
            
            
        } catch (Exception e) {
            kq.setText("Nhập dữ liệu sai");
        }
    }
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
            java.util.logging.Logger.getLogger(FormHieu.class.getName()).log(java.util.logging.Level.SEVERE, null, ex);
        } catch (InstantiationException ex) {
            java.util.logging.Logger.getLogger(FormHieu.class.getName()).log(java.util.logging.Level.SEVERE, null, ex);
        } catch (IllegalAccessException ex) {
            java.util.logging.Logger.getLogger(FormHieu.class.getName()).log(java.util.logging.Level.SEVERE, null, ex);
        } catch (javax.swing.UnsupportedLookAndFeelException ex) {
            java.util.logging.Logger.getLogger(FormHieu.class.getName()).log(java.util.logging.Level.SEVERE, null, ex);
        }
        //</editor-fold>

        /* Create and display the form */
        java.awt.EventQueue.invokeLater(new Runnable() {
            public void run() {
                new FormHieu().setVisible(true);
            }
        });
    }

    void setLocale(boolean b){
        throw  new UnsupportedOperationException("Not supported yet.");
    }
    // Variables declaration - do not modify//GEN-BEGIN:variables
    // End of variables declaration//GEN-END:variables
}
