/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */
package zoologico;

/**
 *
 * @author LENOVO
 */
public class AnimalFactory implements Izoologico {
    
    public Mamifero crearMamifero(String nombre, double temperatura, int Npatas, String color) {
        return new Mamifero(nombre, temperatura, Npatas, color);
    }

    
    public Ave crearAve(String nombre, double peso, double tamAlas) {
        return new Ave(nombre, peso, tamAlas);
    }

    
    public Pez crearPez(String nombre, double longitud) {
        return new Pez(nombre, longitud);
    }

    
}
