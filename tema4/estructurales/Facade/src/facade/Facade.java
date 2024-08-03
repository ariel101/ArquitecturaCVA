/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Main.java to edit this template
 */
package facade;

/**
 *
 * @author Carlos
 */
public class Facade {

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
        // TODO code application logic here
            ObtenerFacade cliente1 = new ObtenerFacade();
        cliente1.buscar("26/10/2021", "30/10/2021", "Sucre", "Santa Cruz");

        ObtenerFacade cliente2 = new ObtenerFacade();
        cliente2.buscar("02/11/2021", "08/1/2021", "Sucre", "La Paz");

    }
    
}
