function calculadora(num1, num2, operador) {
  let resultado;

  switch (operador) {
    case '+':
      resultado = num1 + num2;
      break;
    case '-':
      resultado = num1 - num2;
      break;
    case '*':
      resultado = num1 * num2;
      break;
    case '/':
      if (num2 === 0) {
        return "error: no se puede dividir por cero";
      }
      resultado = num1 / num2;
      break;
    default:
      return "error: operador no valido";
  }

  return resultado;
}

// example usage
console.log(calculadora(10, 5, '+'));
console.log(calculadora(10, 0, '/'));






function filtrarporpropiedad(array, propiedad, valor) {
  return array.filter(objeto => objeto[propiedad] === valor);
}

// example usage
const productos = [
  { nombre: 'laptop', categoria: 'electronica' },
  { nombre: 'mouse', categoria: 'accesorios' },
  { nombre: 'teclado', categoria: 'electronica' }
];

const electronica = filtrarporpropiedad(productos, 'categoria', 'electronica');
console.log(electronica);






function encontrarmaximo(array) {
  if (array.length === 0) {
    return undefined;
  }

  let maximo = array[0];
  for (let i = 1; i < array.length; i++) {
    if (array[i] > maximo) {
      maximo = array[i];
    }
  }

  return maximo;
}

// example usage
const numeros = [5, 12, 3, 9, 20];
console.log(encontrarmaximo(numeros));






function calcularbalance(transacciones) {
  return transacciones.reduce((balance, transaccion) => {
    return balance + transaccion.monto;
  }, 0);
}

// example usage
const transaccionesdiarias = [
  { descripcion: 'salario', monto: 1500 },
  { descripcion: 'cafe', monto: -5 },
  { descripcion: 'alquiler', monto: -800 }
];

const balancefinal = calcularbalance(transaccionesdiarias);
console.log(balancefinal);












function concatenararrays(arr1, arr2) {
  return [...arr1, ...arr2];
}

// example usage
const heroes = ['batman', 'superman'];
const villanos = ['joker', 'lex luthor'];

const personajes = concatenararrays(heroes, villanos);
console.log(personajes);