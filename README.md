## POO

### Conceitos do curso

1. Como funciona instâncias
2. Criação de valor na memória e referência: Toda vez que criamos uma instância ela vai criar
um espaço reservado na memória com o objeto da classe e suas propriedades, quando atribuímos por exemplo
para uma variável que instanciou uma classe (criou um novo espaço na memória) e depóis atrivuímos a ela
o valor de uma variável com outra instância de classe, ela vai apontar para a mesma refeência da 
variável do seu valor

````php
// Novo endereço na memória
$firstClass = new Class();
$firstClass->name = 'Nova classe';

// Novo endereço na memória
$class = new Class();
$class->name = 'Criado depois';

// Aponta para o mesmo endereço da memória da instância de firstClass
$class = $firstClass;
````

3. Modificador de acesso - public vs private: public permite que você altere o valor de propriedades em outros arquivos
onde você criou variáveis que instanciaram a classe, já o privete só permite alterar o valor da propriedade 
somente dentro da classe com o $this->propriedade
4. Acesso aos dados - Getter vs Setter: É comum criarmos atributos com acesso privado para manipularmos somente
dentro da classe, e para isso criamos um **Getter** (método que retorna o valor do atributo) para acessar o 
valor. Já o **Setter** é um método que vai ser responsável por alterar o valor da propriedade internamente
5. Por que faz sentido usar Getter e Setter ao invés de deixar a propriedade pública? Porque com os métodos
podemos atribuir regras para atribuição de valores

````php
class Movie {
    private string $name;
    private string $type;

    public function getName(): string
    {
        return $this->name;
    }
    
    public function setName(string $name): void
    {
        $this->name = $name;
    }
}
````
6. Construtor: É onde podemos construir a classe e atribuir vários valores iniciais sem a necessidade de
ter que usar Setter, através dele podemos receber vários parametros e já atribuir valores nos atributos, uma
boa prática é ao definir um atributo com um valor padrão seja feito dentro do construtor, por exemplo
ao invés de atribuir o valor padrão na definição do atributo, acessamos esse atributo dentro do construtor 
para atribuirmos o valor a ele.

````php
class Class {
    private array $teachers;
    
    public __construct(
        private string $name;
    )
    {
        $this->teachers = []; // O ideal é definir aqui
    }

}
````

7. especificando propriedades como readonly: Como o próprio nome já diz, você indica que a propriedade vai ser
somente de leitura, portanto ao invés de criar uma propriedade como private e usar um getter, você pode criar 
ela como publica e acessar normalmente, mas a definição de readonly não permite que ela seja alterada

8. Propriedades estáticas vs constantes: Podemos criar propriedades estáticas que vão pertencer a classe em
si e não ao objeto da instância, portanto se criarmos duas instâncias de uma mesma classe e adicionar um 
contador na propriedade estática o valor vai ser alterado para ambas as instâncias

```php
class Class {
    private static int $media = 0;

    // Só é possível tipar a partir do 8.3
    private const int MEDIA = 6;

    public function inclement(): void
    {
        self::$media++;
    }

    public function getMedia(): string
    {
        return self::$media >= self::MEDIA ? 'Aprovado' : 'Reprovado';
    }
}

$old = new Class();
$new = new Class();

$old->inclement(); // $media = 1;
$old->inclement(); // $media = 2;
$old->inclement(); // $media = 3;

$new->inclement(); // $media = 4;
$new->inclement(); // $media = 5;
$new->inclement(); // $media = 6;

$old->getMedia(); // Aprovado
$new->getMedia(); // Aprovado
```