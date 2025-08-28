#include <iostream>
#include <cmath>

class Circulo {
private:
    double radio;

public:
    Circulo(double r) {
        radio = r;
    }

    double getArea() {
        return M_PI * radio * radio;
    }

    double getCircunferencia() {
        return 2 * M_PI * radio;
    }
};

int main() {
    Circulo miCirculo(5.0);
    std::cout << "Área del círculo: " << miCirculo.getArea() << std::endl;
    std::cout << "Circunferencia del círculo: " << miCirculo.getCircunferencia() << std::endl;
    return 0;
}



#include <iostream>
#include <vector>
#include <numeric>

class Estudiante {
private:
    std::vector<double> calificaciones;

public:
    void agregarCalificacion(double calif) {
        calificaciones.push_back(calif);
    }

    double getPromedio() {
        if (calificaciones.empty()) {
            return 0.0;
        }
        double suma = std::accumulate(calificaciones.begin(), calificaciones.end(), 0.0);
        return suma / calificaciones.size();
    }
};

int main() {
    Estudiante miEstudiante;
    miEstudiante.agregarCalificacion(8.5);
    miEstudiante.agregarCalificacion(9.0);
    miEstudiante.agregarCalificacion(7.5);
    std::cout << "El promedio del estudiante es: " << miEstudiante.getPromedio() << std::endl;
    return 0;
}




#include <iostream>
#include <string>

class Persona {
protected:
    std::string nombre;
    int edad;

public:
    Persona(const std::string& n, int e) : nombre(n), edad(e) {}

    void saludar() {
        std::cout << "Hola, mi nombre es " << nombre << "." << std::endl;
    }
};

class Empleado : public Persona {
private:
    double salario;

public:
    Empleado(const std::string& n, int e, double s) : Persona(n, e), salario(s) {}

    void trabajar() {
        std::cout << nombre << " está trabajando y gana " << salario << " al mes." << std::endl;
    }
};

int main() {
    Empleado miEmpleado("Carlos", 30, 50000.0);
    miEmpleado.saludar();
    miEmpleado.trabajar();
    return 0;
}





#include <iostream>
#include <string>

class Motor {
private:
    std::string tipo;

public:
    Motor(const std::string& t) : tipo(t) {}

    void encender() {
        std::cout << "El motor de tipo " << tipo << " se ha encendido." << std::endl;
    }
};

class Coche {
private:
    Motor motor;

public:
    Coche(const std::string& tipoMotor) : motor(tipoMotor) {}

    void arrancar() {
        std::cout << "Arrancando el coche..." << std::endl;
        motor.encender();
    }
};

int main() {
    Coche miCoche("V8");
    miCoche.arrancar();
    return 0;
}






#include <iostream>
#include <map>
#include <string>

class Inventario {
private:
    std::map<std::string, int> productos;

public:
    void agregarProducto(const std::string& nombre, int cantidad) {
        productos[nombre] += cantidad;
        std::cout << "Se agregaron " << cantidad << " unidades de " << nombre << "." << std::endl;
    }

    void mostrarInventario() {
        std::cout << "\n--- Inventario Actual ---" << std::endl;
        if (productos.empty()) {
            std::cout << "El inventario está vacío." << std::endl;
        } else {
            for (const auto& par : productos) {
                std::cout << par.first << ": " << par.second << " unidades" << std::endl;
            }
        }
        std::cout << "--------------------------" << std::endl;
    }
};

int main() {
    Inventario miInventario;
    miInventario.agregarProducto("Laptop", 10);
    miInventario.agregarProducto("Mouse", 50);
    miInventario.agregarProducto("Laptop", 5); // Agrega más laptops
    miInventario.mostrarInventario();
    return 0;
}