/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Interface.java to edit this template
 */
package zoologico;

/**
 *
 * @author LENOVO
 */
public interface Izoologico {
    
    Mamifero crearMamifero(String nombre, double temperatura, int Npatas, String color);
    Ave crearAve(String nombre, double peso, double tamAlas);
    Pez crearPez(String nombre, double longitud);
    
    
}

