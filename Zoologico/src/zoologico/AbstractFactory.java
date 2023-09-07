/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Main.java to edit this template
 */
package zoologico;

import java.util.Scanner;

/**
 *
 * @author LENOVO
 */
public class AbstractFactory {

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
        // TODO code application logic here
        
        AnimalFactory fabricaAnimales = new AnimalFactory();
        Zoologico zoo = new Zoologico("Mi Zoológico", "123 Main St.", "555-1234");
        
        Scanner scanner = new Scanner(System.in);
        int opcion;
        
        do {
            System.out.println("Menú:");
            System.out.println("1. Añadir Mamífero");
            System.out.println("2. Añadir Ave");
            System.out.println("3. Añadir Pez");
            System.out.println("4. Mostrar Mamíferos");
            System.out.println("5. Mostrar Aves");
            System.out.println("6. Mostrar Peces");
            System.out.println("7. Mostrar Zoológico");
            System.out.println("8. Salir");
            System.out.print("Selecciona una opción: ");
            
            opcion = scanner.nextInt();
            scanner.nextLine(); 
            
            switch (opcion) {
                case 1:
                    System.out.print("Nombre del mamífero: ");
                    String nombreMamifero = scanner.nextLine();
                    System.out.print("Temperatura: ");
                    double temperatura = scanner.nextDouble();
                    System.out.print("Número de patas: ");
                    int nroPatas = scanner.nextInt();
                    scanner.nextLine();
                    System.out.print("Color: ");
                    String color = scanner.nextLine();
                    
                    Mamifero mamifero = fabricaAnimales.crearMamifero(nombreMamifero, temperatura, nroPatas, color);
                    Jaula jaulaMamifero = new Jaula(mamifero, 5.0, 4.0, 3.0);
                    zoo.añadirJaula(jaulaMamifero);
                    break;
                    
                case 2:
                    System.out.print("Nombre del ave: ");
                    String nombreAve = scanner.nextLine();
                    System.out.print("Peso: ");
                    double peso = scanner.nextDouble();
                    System.out.print("Tamaño de alas: ");
                    double tamañoAlas = scanner.nextDouble();
                    scanner.nextLine();

                    Ave ave = fabricaAnimales.crearAve(nombreAve, peso, tamañoAlas);
                    Jaula jaulaAve = new Jaula(ave, 2.0, 1.0, 2.0);
                    zoo.añadirJaula(jaulaAve);
                    break;
                    
                case 3:
                    System.out.print("Nombre del pez: ");
                    String nombrePez = scanner.nextLine();
                    System.out.print("Longitud: ");
                    double longitud = scanner.nextDouble();
                    scanner.nextLine();

                    Pez pez = fabricaAnimales.crearPez(nombrePez, longitud);
                    Jaula jaulaPez = new Jaula(pez, 1.0, 0.5, 1.0);
                    zoo.añadirJaula(jaulaPez);
                    break;
                    
                case 4:
                    System.out.println("Mamíferos en el zoológico:");
                    mostrarAnimales(zoo, Mamifero.class);
                    break;
                    
                case 5:
                    System.out.println("Aves en el zoológico:");
                    mostrarAnimales(zoo, Ave.class);
                    break;
                    
                case 6:
                    System.out.println("Peces en el zoológico:");
                    mostrarAnimales(zoo, Pez.class);
                    break;
                    
                case 7:
                    
                    zoo.mostrarAnimales();
                    break;
                    
                case 8:
                    System.out.println("Saliendo del programa...");
                    break;
                    
                default:
                    System.out.println("Opción no válida. Inténtalo de nuevo.");
                    break;
            }
        } while (opcion != 8);
        
        scanner.close();
    }
    
    private static <T extends Animal> void mostrarAnimales(Zoologico zoo, Class<T> tipoAnimal) {
        for (Jaula jaula : zoo.getListaJaulas()) {
            if (tipoAnimal.isInstance(jaula.getAnimal())) {
                System.out.println(jaula.getAnimal().nombre);
            }
        }
        System.out.println();
    }
}
