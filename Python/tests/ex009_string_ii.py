msg = input(' Digite algo: ')
print(f' O tamanho dessa frase é de {len(msg)} caracteres!')
print('Fundamentos Da Lógica'.count('a', 0, 11))
print('fundamentos da lógica'.find('da'))
print('lógica'in'Fundamentos Da Lógica')
print(' Sem Lógica'.replace('Lógica', 'Programação'))
print('Fundamentos Da Lógica'.upper())
print('Fundamentos Da Lógica'.lower())
print('fundamentos da LÓGICA!'.capitalize())
print('fundamentos da LÓGICA!'.title())
msg2 = str(input(' Digite uma frase: ')).strip()
print(msg2)
print(msg2.split())
print((msg2.split()[-1]).upper())
print(' '.join(msg2.split()))
print(' '.join(msg2.split())[-(len(msg2.split()[-1])):].upper())
