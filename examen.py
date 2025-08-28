#ejercicio 1


def transformar_matriz(matriz, numero):
    return [[elemento * numero for elemento in fila] for fila in matriz]

matriz_original = [[1, 2, 3], [4, 5, 6], [7, 8, 9]]
matriz_transformada = transformar_matriz(matriz_original, 3)

print("matriz original:", matriz_original)
print("matriz transformada:", matriz_transformada)


#ejercicio 2


def ordenar_por_puntuacion(lista_tuplas):
    return sorted(lista_tuplas, key=lambda tupla: tupla[1], reverse=True)

participantes = [("juan", 85), ("ana", 92), ("pedro", 78), ("maria", 95)]
participantes_ordenados = ordenar_por_puntuacion(participantes)

print("lista original:", participantes)
print("lista ordenada por puntuación (descendente):", participantes_ordenados)


#ejercicio 3


def producto_recursivo(lista):
    if not lista:
        return 1
    else:
        return lista[0] * producto_recursivo(lista[1:])

numeros1 = [1, 2, 3, 4, 5]
numeros2 = [10, 2]
numeros3 = []

print("producto de", numeros1, ":", producto_recursivo(numeros1))
print("producto de", numeros2, ":", producto_recursivo(numeros2))
print("producto de", numeros3, ":", producto_recursivo(numeros3))


#ejercicio 4


def aplanar_listas(*listas):
    return [elemento for lista in listas for elemento in lista]

lista_a = [1, 2]
lista_b = [3, 4, 5]
lista_c = [6]

lista_aplanada = aplanar_listas(lista_a, lista_b, lista_c)
print("listas originales:", lista_a, lista_b, lista_c)
print("lista aplanada:", lista_aplanada)


#ejercicio 5


def filtrar_por_longitud(lista_palabras, longitud_minima):
    return [palabra for palabra in lista_palabras if len(palabra) > longitud_minima]

palabras = ["manzana", "perro", "computadora", "sol", "elefante"]
longitud_corte = 5

palabras_filtradas = filtrar_por_longitud(palabras, longitud_corte)

print("lista original:", palabras)
print("palabras con longitud mayor a", longitud_corte, ":", palabras_filtradas)