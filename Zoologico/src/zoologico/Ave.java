/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */
package zoologico;

/**
 *
 * @author LENOVO
 */
class Ave extends Animal {
    private double peso;
    private double tamAlas;

    public Ave(String nombre, double peso,double tamAlas) {
        super(nombre);
        this.peso = peso;
        this.tamAlas = tamAlas;
    }

    public double getPeso() {
        return peso;
    }

    public void setPeso(double peso) {
        this.peso = peso;
    }

    public double getTamAlas() {
        return tamAlas;
    }

    public void setTamAlas(double tamAlas) {
        this.tamAlas = tamAlas;
    }

    public String getNombre() {
        return nombre;
    }

    public void setNombre(String nombre) {
        this.nombre = nombre;
    }
    
    
    
    
}
