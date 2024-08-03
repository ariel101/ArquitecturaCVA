/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Main.java to edit this template
 */
package proxy;

/**
 *
 * @author Carlos
 */
public class Proxy {

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
        // TODO code application logic here
               ICuenta b1=new CuentaBancoA();
        Cuenta c= new Cuenta(1, "2530", 100);
        b1.depositarDinero(c, 100);
        b1.mostrarSaldo(c);
        b1.retirarDinero(c, 20);
        b1.mostrarSaldo(c);
        
        ICuenta proxy=new CuentaProxy(new CuentaBancoB());
        proxy.depositarDinero(c, 100);
        proxy.mostrarSaldo(c);
        proxy.retirarDinero(c, 10);
        proxy.mostrarSaldo(c);
    }
    
}
