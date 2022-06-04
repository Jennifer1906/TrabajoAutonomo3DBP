class Display {
    constructor(displayValorAnterior, displayValorActual) {
        this.displayValorActual = displayValorActual;
        this.displayValorAnterior = displayValorAnterior;
        this.calculadora = new Calculadora();
        this.operacion = undefined;
        this.valorActual = '';
        this.valorAnterior = '';
        this.signos = {
            sumar: '+',
            restar: '-',
            multiplicar: '*',
            dividir: '/'
        }
    }

    agregarNumero(num) {
        console.log(this.valorActual.length)
        if (num == '.' && this.valorActual.length == 0) {
            this.valorActual = '0' + num.toString();
            this.imprimirValores();
        } else if (num == '.' && this.valorActual.includes('.')) {
            return;
        } else {
            this.valorActual = this.valorActual.toString() + num.toString();
            this.imprimirValores();
        }

    }

    borrar() {
        this.valorActual = this.valorActual.toString().slice(0, -1);
        this.imprimirValores();
    }

    borrarTodo() {
        this.valorActual = '';
        this.valorAnterior = '';
        this.operacion = undefined;
        this.imprimirValores();
    }

    computar(operacion) {
        this.operacion !== 'igual' && this.calcular();
        this.operacion = operacion;
        this.valorAnterior = this.valorActual || this.valorAnterior;
        this.valorActual = '';
        this.imprimirValores();
    }

    calcular() {
        const valorAnterior = parseFloat(this.valorAnterior);
        const valorActual = parseFloat(this.valorActual);

        if (isNaN(valorActual) || isNaN(valorAnterior)) {
            return;
        } else {
            this.valorActual = this.calculadora[this.operacion](valorAnterior, valorActual);
        }
    }

    imprimirValores() {
        this.displayValorActual.textContent = this.valorActual;
        this.displayValorAnterior.textContent = `${this.valorAnterior} ${this.signos[this.operacion] || ''}`;
    }
}