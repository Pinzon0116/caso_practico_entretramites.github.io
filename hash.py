from hashlib import md5
import itertools

hash_md5 = "49f68a5c8493ec2c0bf489821c21fc3b"
contenido = "abcdefghijklmnopqrstuvwxyz"
largo = 2

def conversion(hash, caracteres, largo):
    for combinaciones in itertools.product(caracteres, repeat=largo):
        s = ''.join(combinaciones)
        if md5(s.encode('utf-8')).hexdigest() == hash:
            return s
    return None

if __name__ == "__main__":
    result = conversion(hash_md5, contenido, largo)
    if result:
        print(f"Encontrado: '{result}'")
    else:
        print("No se encontró ninguna cadena en el conjunto especificado.")
