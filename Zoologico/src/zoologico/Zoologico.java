/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */
package zoologico;

import java.util.ArrayList;
import java.util.List;

/**
 *
 * @author LENOVO
 */
public class Zoologico {
    
    private String nombre;
    private List<Jaula> listaJaulas;
    private String direccion;
    private String telefono;

    public Zoologico(String nombre, String direccion, String telefono) {
        this.nombre = nombre;
        this.listaJaulas = new ArrayList<>();
        this.direccion = direccion;
        this.telefono = telefono;
    }

    public String getNombre() {
        return nombre;
    }

    public void setNombre(String nombre) {
        this.nombre = nombre;
    }

    public List<Jaula> getListaJaulas() {
        return listaJaulas;
    }

    public void setListaJaulas(List<Jaula> listaJaulas) {
        this.listaJaulas = listaJaulas;
    }

    public String getDireccion() {
        return direccion;
    }

    public void setDireccion(String direccion) {
        this.direccion = direccion;
    }

    public String getTelefono() {
        return telefono;
    }

    public void setTelefono(String telefono) {
        this.telefono = telefono;
    }
    
    

    public void añadirJaula(Jaula jaula) {
        listaJaulas.add(jaula);
    }

    public void mostrarAnimales() {
        for (Jaula jaula : listaJaulas) {
            System.out.println("Animal: " + jaula.getAnimal().nombre);
        }
    }
    
}
