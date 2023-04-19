let modalKey = 0

let quantPlacas = 1

let cart = [] // carrinho

const formatoReal = (valor) => {
    return valor.toLocaleString('pt-BR', { style: 'currency', currency: 'BRL' })
}

const formatoMonetario = (valor) => {
    if(valor) {
        return valor.toFixed(2)
    }
}

const seleciona = (elemento) => document.querySelector(elemento)
const selecionaTodos = (elemento) => document.querySelectorAll(elemento)

const preencheDadosDasPlacas = (placaItem, item, index) => {
    placaItem.setAttribute('data-key', index)
    placaItem.querySelector('.placa-item--img img').src = item.img
    placaItem.querySelector('.placa-item--price').innerHTML = item.price
    placaItem.querySelector('.placa-item--name').innerHTML = item.name
    placaItem.querySelector('.placa-item--desc').innerHTML = item.description
}

const abrirModal = () => {
    seleciona('.placaWindowArea').style.opacity = 0 // transparente
    seleciona('.placaWindowArea').style.display = 'flex'
    setTimeout(() => seleciona('.placaWindowArea').style.opacity = 1, 150)
}

const fecharModal = () => {
    seleciona('.placaWindowArea').style.opacity = 0 // transparente
    setTimeout(() => seleciona('.placaWindowArea').style.display = 'none', 500)
}

const abrirCarrinho = () => {
    console.log('Qtd de itens no carrinho' + cart.length)
    if(cart.length > 0) {
        // mostrar o carrinho
	    seleciona('aside').classList.add('show')
        seleciona('header')
    }
}

const botoesFechar = () => {
    // BOTOES FECHAR MODAL
    selecionaTodos('.placaInfo--cancelButton, .placaInfo--cancelMobileButton').forEach( (item) => item.addEventListener('click', fecharModal) )
}

const atualizarCarrinho = () => {
	

	if(cart.length > 0) {


		seleciona('aside').classList.add('show')


		seleciona('.cart').innerHTML = ''


		let subtotal = 0
		let desconto = 0
		let total    = 0


		for(let i in cart) {

			let placaItem = placaJson.find( (item) => item.id == cart[i].id )
			console.log(placaItem)

        	subtotal += cart[i].price * cart[i].qt

			let cartItem = seleciona('.models .cart--item').cloneNode(true)
			seleciona('.cart').append(cartItem)

			let placaName = `${placaItem.name}`

			cartItem.querySelector('img').src = placaItem.img
			cartItem.querySelector('.cart--item-nome').innerHTML = placaName
			cartItem.querySelector('.cart--item--qt').innerHTML = cart[i].qt

			cartItem.querySelector('.cart--item-qtmais').addEventListener('click', () => {
				console.log('Clicou no botão mais')
				cart[i].qt++
				atualizarCarrinho()
			})

			cartItem.querySelector('.cart--item-qtmenos').addEventListener('click', () => {
				console.log('Clicou no botão menos')
				if(cart[i].qt > 1) {
					cart[i].qt--
				} else {
					cart.splice(i, 1)
				}

                (cart.length < 1) ? seleciona('header').style.display = 'flex' : ''

				atualizarCarrinho()
			})

			seleciona('.cart').append(cartItem)

		}

		desconto = subtotal * 0
		total = subtotal - desconto

		seleciona('.subtotal span:last-child').innerHTML = formatoReal(subtotal)
		seleciona('.desconto span:last-child').innerHTML = formatoReal(desconto)
		seleciona('.total span:last-child').innerHTML    = formatoReal(total)

	} else {

		seleciona('aside').classList.remove('show')
		seleciona('aside').style.left = '100vw'
	}
}

const preencheDadosModal = (item) => {
    seleciona('.placaBig img').src = item.img
    seleciona('.placaInfo h1').innerHTML = item.name
    seleciona('.placaInfo--desc').innerHTML = item.description
    seleciona('.placaInfo--actualPrice').innerHTML = item.price
}

const mudarQuantidade = () => {
    // Ações nos botões + e - da janela modal
    seleciona('.placaInfo--qtmais').addEventListener('click', () => {
        quantPlacas++
        seleciona('.placaInfo--qt').innerHTML = quantPlacas
    })

    seleciona('.placaInfo--qtmenos').addEventListener('click', () => {
        if(quantPlacas > 1) {
            quantPlacas--
            seleciona('.placaInfo--qt').innerHTML = quantPlacas	
        }
    })
}

const fecharCarrinho = () => {

    seleciona('.menu-closer').addEventListener('click', () => {
        seleciona('aside').classList.remove('show')
        seleciona('header')
    })
}

const finalizarCompra = () => {
    seleciona('.cart--finalizar').addEventListener('click', () => {
        console.log('Finalizar compra')
        seleciona('aside').classList.remove('show')
        seleciona('aside').style.left = '100vw'
        seleciona('header').style.display = 'flex'
    })
}

const adicionarNoCarrinho = () => {
    seleciona('.placaInfo--addButton').addEventListener('click', () => {
        console.log('Adicionar no carrinho')

        // pegar dados da janela modal atual
    	console.log("Placa " + modalKey)

	    // quantidade
    	console.log("Quant. " + quantPlacas)
        // preco
        let price = seleciona('.placaInfo--actualPrice').innerHTML.replace('R$&nbsp;', '')
    
	    let identificador = placaJson[modalKey].id+'t'

        let key = cart.findIndex( (item) => item.identificador == identificador )
        console.log(key)

        if(key > -1) {
            cart[key].qt += quantPlacas
        } else {

            let placa = {
                identificador,
                id: placaJson[modalKey].id,
                qt: quantPlacas,
                price: parseFloat(price) 
            }
            cart.push(placa)
            console.log(placa)
            console.log('Sub total R$ ' + (placa.qt * placa.price))
        }

        fecharModal()
        abrirCarrinho()
        atualizarCarrinho()
    })
}

//placa clicada



placaJson.map((item, index) => {

    let placaItem = seleciona('.models .placa-item').cloneNode(true)

    seleciona('.placa-area').append(placaItem)

    preencheDadosDasPlacas(placaItem, item, index)

    placaItem.querySelector('.placa-item a').addEventListener('click', (e) => {
        e.preventDefault()
        console.log('clicou na placa')

            let chave = pegarKey(e)

    
            // abrir janela modal
            abrirModal()
    
            // preenchimento dos dados
            preencheDadosModal(item)
    
            // definir quantidade inicial como 1
            seleciona('.placaInfo--qt').innerHTML = quantPlacas
    

        document.querySelector('.placaWindowArea').style.display = 'flex'

        //preenchimento dos dados
        document.querySelector('.placaBig img').src = item.img
        document.querySelector('.placaInfo h1').innerHTML = item.name
        document.querySelector('.placaInfo--desc').innerHTML = item.description
        document.querySelector('.placaInfo--actualPrice').innerHTML = item.price
    })

    document.querySelector('.placaInfo--cancelButton').addEventListener('click', () => {
        document.querySelector('.placaWindowArea').style.display = 'none'
    })

    document.querySelector('.placaInfo--cancelMobileButton').addEventListener('click', () => {
        document.querySelector('.placaWindowArea').style.display = 'none'
    })

    botoesFechar()

})

const pegarKey = (e) => {
    // .closest retorna o elemento mais proximo que tem a class que passamos
    // do .placa-item ele vai pegar o valor do atributo data-key
    let key = e.target.closest('.placa-item').getAttribute('data-key')
    console.log('Placa clicada ' + key)
    console.log(placaJson[key])

    // garantir que a quantidade inicial de placas é 1
    quantPlacas = 1

    // Para manter a informação de qual placa foi clicada
    modalKey = key

    return key


}

mudarQuantidade()

adicionarNoCarrinho()
atualizarCarrinho()
fecharCarrinho()
finalizarCompra()




