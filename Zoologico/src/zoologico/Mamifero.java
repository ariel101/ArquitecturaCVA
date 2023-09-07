/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */
package zoologico;

/**
 *
 * @author LENOVO
 */
class Mamifero extends Animal {
    
    double temperatura;
    int Npatas;
    String color;

    public Mamifero(String  color, double temperatura, int Npatas, String nombre) {
        super(nombre);
        this.temperatura = temperatura;
        this.Npatas = Npatas;
        this.color = color;
    }

    public double getTemperatura() {
        return temperatura;
    }

    public void setTemperatura(double temperatura) {
        this.temperatura = temperatura;
    }

    public int getNpatas() {
        return Npatas;
    }

    public void setNpatas(int Npatas) {
        this.Npatas = Npatas;
    }

    public String getColor() {
        return color;
    }

    public void setColor(String color) {
        this.color = color;
    }

    public String getNombre() {
        return nombre;
    }

    public void setNombre(String nombre) {
        this.nombre = nombre;
    }
    
    
    
}
