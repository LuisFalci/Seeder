<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Log;
use App\Models\ArchiveEntity;

class InventarioSumarioDaCamaraMunicipalnoImperioSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */

	const DESCRIPTION_LEVEL_MAP =
		[
			'collection' => 1,
			'fonds' => 2,
			'section' => 3,
			'subsection' => 4,
			'serie' => 5,
			'subserie' => 6,
			'item' => 7,
		];

	public function run()
	{

		$elements = [
			'fonds-1' => [
				'title' => 'Câmara Municipal de Juiz de Fora no Império',
				[
					'section-1' => [
						'title' => 'ÓRGÃOS DO GOVERNO IMPERIAL E PROVINCIAL',
						[
							'subsection-1' => [
								'title' => 'Governo Imperial',
								[
									'serie-1' => [
										'title' => 'CORRESPONDÊNCIA entre o Conselho de Ministros e a Câmara Municipal de Juiz de Fora',
										'description' => 'Quase todos os ofícios são assinados pelo Barão de Cotegipe na qualidade de Presidente do Conselho
										de Ministros',
										'start_date' => \Carbon\Carbon::parse('01-01-1880'),
										'end_date' => \Carbon\Carbon::parse('31-12-1887'),
										[
											'item' => 5,
										],
									],
									'serie-2' => [
										'title' => 'CORRESPONDÊNCIA entre a Diretoria Geral de Estatísticas e a Câmara Municipal de Juiz de Fora',
										'start_date' => \Carbon\Carbon::parse('01-01-1874'),
										'end_date' => \Carbon\Carbon::parse('31-12-1877'),
										[
											'item' => 6,
										],
									],
									'serie-3' => [
										'title' => 'CORRESPONDÊNCIA entre diversos órgãos do Império e a Câmara Municipal de Juiz de Fora.',
										'description' => 'São os seguintes os órgãos: Imperial Instituto Fluminense de Agricultura; Inspetoria Geral de Higiene; Ministério da Marinha; Ministério do Estado dos Negócios da Agricultura; Comércio e Obras Públicas; Ministério dos Negócios da Fazenda; Ministério dos Negócios da Guerra; Ministério dos Negócios do Império; Secretaria de Polícia da Côrte; Relação da Côrte.',
										'start_date' => \Carbon\Carbon::parse('01-01-1856'),
										'end_date' => \Carbon\Carbon::parse('31-12-1889'),
										[
											'item' => 26,
										],
									],
									'serie-4' => [
										'title' => 'CORRESPONDÊNCIA entre a Diretoria da Estrada de Ferro D.Pedro II e a Câmara Municipal de Juiz de Fora.',
										'description' => 'Além de um recibo,contém ainda cópia de correspondência entre a Diretoria da Estrada de Ferro e outras entidades:Ministério dos Negócios da Agricutura e Obras,Chefe do Tráfego.',
										'start_date' => \Carbon\Carbon::parse('01-01-1872'),
										'end_date' => \Carbon\Carbon::parse('31-12-1889'),
										[
											'item' => 32,
										],
									],
									'serie-5' => [
										'title' => 'DOCUMENTOS da Guarda Nacional referentes à Juiz de Fora e outras localidades',
										'description' => 'Contém correspondência e relação de guardas.',
										'start_date' => \Carbon\Carbon::parse('01-01-1858'),
										'end_date' => \Carbon\Carbon::parse('31-12-1878'),
										[
											'item' => 16,
										],
									],
									'serie-6' => [
										'title' => 'CORRESPONDÊNCIA da Câmara Municipal de Juiz de Fora com Senadores e Deputados do Império',
										'start_date' => \Carbon\Carbon::parse('01-01-1864'),
										'end_date' => \Carbon\Carbon::parse('31-12-1888'),
										[
											'item' => 10,
										],
									],
								],
							],
							'subsection-2' => [
								'title' => ' Governo Provincial',
								'description' => 'Presidência da Província de Minas Gerais',
								[
									'serie-7' => [
										'title' => 'CORRESPONDÊNCIA entre a Presidência da Província e a Câmara Municipal de Juiz de Fora,referente a agricultura',
										'start_date' => \Carbon\Carbon::parse('01-01-1861'),
										'end_date' => \Carbon\Carbon::parse('31-12-1889'),
										[
											'item' => 30,
										],
									],
									'serie-8' => [
										'title' => 'CORRESPONDÊNCIA entre a Presidência da Província e a Câmara Municipal de Juiz de Fora,referente à Assembléia Legislativa Provincial.',
										'description' => 'Contém uma proposta da Câmara à Assembléia e informações sobre o funcionamento desta.',
										'start_date' => \Carbon\Carbon::parse('01-01-1863'),
										'end_date' => \Carbon\Carbon::parse('31-12-1882'),
										[
											'item' => 9,
										],
									],
									'serie-9' => [
										'title' => 'CORRESPONDÊNCIA entre a Presidência da Provincia e a Câmara Municipal de Juiz de Fora,referente à assuntos diversos.',
										'description' => 'Contém um ofício enviado pelo Palácio do Governo da Provincia do Espírito Santo à Câmara Municipal de Juiz de Fora e ofício recebido pela Câmara referente à criação de um jardim zoológico na Capital da Província.',
										'start_date' => \Carbon\Carbon::parse('01-01-1854'),
										'end_date' => \Carbon\Carbon::parse('31-12-1888'),
										[
											'item' => 87,
										],
									],
									'serie-10' => [
										'title' => 'CORRESPONDÊNCIA referente a Brinde Nacional (reconhecimento a médico pelo tratamento do Imperador).',
										'description' => 'Contém listas para subscrição popular.',
										'start_date' => \Carbon\Carbon::parse('01-01-1888'),
										'end_date' => \Carbon\Carbon::parse('31-12-1888'),
										[
											'item' => 20,
										],
									],
									'serie-11' => [
										'title' => 'CORRESPONDÊNCIA enviada pela Presidência da Província à Câmara Municipal de Juiz de Fora referente a cultura.',
										'description' => 'Almanak Civil Administrativo e Industrial; Biblioteca Nacional; Museu e Festejos.',
										'start_date' => \Carbon\Carbon::parse('01-01-1861'),
										'end_date' => \Carbon\Carbon::parse('31-12-1887'),
										[
											'item' => 13,
										],
									],
									'serie-12' => [
										'title' => 'CORRESPONDENCIA enviada pela Presidência da Provincia à Câmara Municipal de Juiz de Fora, referente a delegados e sub-delegados de polícia de Juiz de Fora.',
										'start_date' => \Carbon\Carbon::parse('01-01-1859'),
										'end_date' => \Carbon\Carbon::parse('31-12-1887'),
										[
											'item' => 6,
										],
									],
									'serie-13' => [
										'title' => 'CORRESPONDENCIA entre a Presidência da Província e a Câmara Municipal de Juiz de Fora,referentes  às divisas territoriais municipais.',
										'start_date' => \Carbon\Carbon::parse('01-01-1854'),
										'end_date' => \Carbon\Carbon::parse('31-12-1871'),
										[
											'item' => 24,
										],
									],
									'serie-14' => [
										'title' => 'CORRESPONDÊNCIA enviada pela Presidência da Província à Câmara Municipal de Juiz de Fora referente a doações de imóveis (terrenos e prédios).',
										'start_date' => \Carbon\Carbon::parse('01-01-1870'),
										'end_date' => \Carbon\Carbon::parse('31-12-1887'),
										[
											'item' => 5,
										],
									],
									'serie-15' => [
										'title' => 'CORRESPONDÊNCIA entre a Presidência da Província e a Câmara Municipal de Juiz de Fora,referente a eleições.',
										'description' => 'A correspondência refere-se a eleições especiais: Juiz de Paz, vereadores, deputados, senadores, eleições primárias, alistamento de votantes e outros aspectos eleitorais. Ofício enviando a circular que eleva a categoria de “cidade” a Vila de Santo Antônio do Parahybuna-53 lei 759 02-mai-1856.',
										'start_date' => \Carbon\Carbon::parse('01-01-1853'),
										'end_date' => \Carbon\Carbon::parse('31-12-1889'),
										[
											'item' => 267,
										],
									],
									'serie-16' => [
										'title' => 'CORRESPONDÊNCIA enviada pela Presidência da Província à  Câmara Municipal de Juiz de Fora referente ao ensino público.',
										'start_date' => \Carbon\Carbon::parse('01-01-1855'),
										'end_date' => \Carbon\Carbon::parse('31-12-1883'),
										[
											'item' => 17,
										],
									],
									'serie-17' => [
										'title' => 'DOCUMENTOS referentes à escravidão.',
										'description' => 'Além de correspondência enviada pela Presidência da Província à Câmara Municipal de Juiz de Fora,contém o texto da Lei do Ventre Livre (Lei 2040,de 28 de setembro de 1871).',
										'start_date' => \Carbon\Carbon::parse('01-01-1871'),
										'end_date' => \Carbon\Carbon::parse('31-12-1888'),
										[
											'item' => 19,
										],
									],
									'serie-18' => [
										'title' => 'CORRESPONDÊNCIA enviada pela Presidência da Provincia à Câmara Municipal de Juiz de Fora referente a estatística e recenciamento.',
										'start_date' => \Carbon\Carbon::parse('01-01-1860'),
										'end_date' => \Carbon\Carbon::parse('31-12-1885'),
										[
											'item' => 9,
										],
									],
									'serie-19' => [
										'title' => 'CORRESPONDÊNCIA enviada pela Presidência da Provincia e a Câmara Municipal de Juiz de Fora referente às finanças do município.',
										'start_date' => \Carbon\Carbon::parse('01-01-1854'),
										'end_date' => \Carbon\Carbon::parse('31-12-1888'),
										[
											'item' => 58,
										],
									],
									'serie-20' => [
										'title' => 'CORRESPONDÊNCIA enviada pela Presidência da Província à Câmara Municipal de Juiz de Fora referente à Igreja Católica.',
										'start_date' => \Carbon\Carbon::parse('01-01-1855'),
										'end_date' => \Carbon\Carbon::parse('31-12-1887'),
										[
											'item' => 17,
										],
									],
									'serie-21' => [
										'title' => 'CORRESPONDÊNCIA enviada pela Presidência da Província à Câmara Municipal de Juiz de Fora referente a imigração com o objetivo de formação de mão-de-obra.',
										'start_date' => \Carbon\Carbon::parse('01-01-1855'),
										'end_date' => \Carbon\Carbon::parse('31-12-1887'),
										[
											'item' => 9,
										],
									],
									'serie-22' => [
										'title' => 'CORRESPONDÊNCIA enviada pela Presidência da Província à Câmara Municipal de Juiz de Fora referente a aforamentos de terras de índios para a Câmara.',
										'start_date' => \Carbon\Carbon::parse('01-01-1869'),
										'end_date' => \Carbon\Carbon::parse('31-12-1888'),
										[
											'item' => 5,
										],
									],
									'serie-23' => [
										'title' => 'CORRESPONDÊNCIA entre a Presidência da Província e a Câmara Municipal de Juiz de Fora solicitando informações sobre o município de Juiz de Fora.',
										'description' => 'As solicitações referem-se a: agricultura,Cia. União e Indústria, limites territoriais, madeiras, pecuária, rios, etc. A maior parte dos ofícios não receberam respostas da Câmara.',
										'start_date' => \Carbon\Carbon::parse('01-01-1853'),
										'end_date' => \Carbon\Carbon::parse('31-12-1889'),
										[
											'item' => 169,
										],
									],
									'serie-24' => [
										'title' => 'CORESPONDÊNCIA enviada pela Presidência da Província à Câmara Municipal de Juiz de Fora,referente a Juízes de Direito,de Paz,Municipal e de Órfãos.',
										'description' => 'Em alguns documentos sobre Juiz de Paz há também referência a Sub-Delegados.',
										'start_date' => \Carbon\Carbon::parse('01-01-1854'),
										'end_date' => \Carbon\Carbon::parse('31-12-1888'),
										[
											'item' => 92,
										],
									],
									'serie-25' => [
										'title' => 'CORRESPONDÊNCIA enviada pela Presidência da Província à Câmara Municipal de Juiz de Fora referente a legislação provincial e posturas.',
										'description' => 'Contém duas correspondências referentes a projetos aprovados (aditivos de posturas da Câmara) e Lei 480 de 1850.',
										'start_date' => \Carbon\Carbon::parse('01-01-1850'),
										'end_date' => \Carbon\Carbon::parse('31-12-1888'),
										[
											'item' => 43,
										],
									],
									'serie-26' => [
										'title' => 'CORRESPONDÊNCIA enviada pela Presidência da Província à Câmara Municipal de Juiz de Fora referente a licença para linhas telefônicas e casas de negócios.',
										'start_date' => \Carbon\Carbon::parse('01-01-1856'),
										'end_date' => \Carbon\Carbon::parse('31-12-1885'),
										[
											'item' => 8,
										],
									],
									'serie-27' => [
										'title' => 'CORRESPONDÊNCIA enviada pela Presidência da Provincia à Câmara Municipal de Juiz de Fora referente a loteria.',
										'description' => 'Contém decretos referentes a loterias.',
										'start_date' => \Carbon\Carbon::parse('01-01-1862'),
										'end_date' => \Carbon\Carbon::parse('31-12-1888'),
										[
											'item' => 19,
										],
									],
									'serie-28' => [
										'title' => 'CORRESPONDÊNCIA enviada pela Presidência da Província à Câmara Municipal de Juiz de Fora referente à naturalização de estrangeiros.',
										'start_date' => \Carbon\Carbon::parse('01-01-1853'),
										'end_date' => \Carbon\Carbon::parse('31-12-1889'),
										[
											'item' => 6,
										],
									],
									'serie-29' => [
										'title' => 'CORRESPONDÊNCIA entre a Presidência da Província e a Câmara Municipal de Juiz de Fora referente a obras públicas.',
										'start_date' => \Carbon\Carbon::parse('01-01-1854'),
										'end_date' => \Carbon\Carbon::parse('31-12-1887'),
										[
											'item' => 167,
										],
									],
									'serie-30' => [
										'title' => 'CORRESPONDÊNCIA enviada pela Presidência da Província à Câmara Municipal de Juiz de Fora referente a pesos e medidas.',
										'description' => 'Contém referências a adoção do sistema métrico francês.',
										'start_date' => \Carbon\Carbon::parse('01-01-1864'),
										'end_date' => \Carbon\Carbon::parse('31-12-1882'),
										[
											'item' => 20,
										],
									],
									'serie-31' => [
										'title' => 'CORRESPONDÊNCIA entre a Presidência da Província e a Câmara Municipal de Juiz de fora referente ao sustento de presos pobres.',
										'description' => 'Contém cópias de correspondência entre outros órgãos.',
										'start_date' => \Carbon\Carbon::parse('01-01-1859'),
										'end_date' => \Carbon\Carbon::parse('31-12-1889'),
										[
											'item' => 57,
										],
									],
									'serie-32' => [
										'title' => 'CORRESPONDÊNCIA protocolar entre a Presidência da Província e a Câmara Municipal de Juiz de Fora.',
										'description' => 'Contém diversos comunicados e votos de felicitações.',
										'start_date' => \Carbon\Carbon::parse('01-01-1853'),
										'end_date' => \Carbon\Carbon::parse('31-12-1889'),
										[
											'item' => 45,
										],
									],
									'serie-33' => [
										'title' => 'CORRESPONDÊNCIA enviada pela Presidência da Província à Câmara Municipal de Juiz de Fora referente a pedidos de concessões de particulares para a exploração de recursos minerais em Juiz de Fora. Inclusive exploração de petróleo.',
										'start_date' => \Carbon\Carbon::parse('01-01-1883'),
										'end_date' => \Carbon\Carbon::parse('31-12-1887'),
										[
											'item' => 7,
										],
									],
									'serie-34' => [
										'title' => 'CORRESPONDÊNCIA entre a Presidência da Província e a Câmara Municipal de Juiz de Fora referente a saúde pública.',
										'start_date' => \Carbon\Carbon::parse('01-01-1855'),
										'end_date' => \Carbon\Carbon::parse('31-12-1889'),
										[
											'item' => 44,
										],
									],
									'serie-35' => [
										'title' => 'CORRESPONDÊNCIA enviada pela Presidência da Província à Câmara Municipal de Juiz de Fora referente ao serviço militar.',
										'title' => 'Contém convocação para a Guerra do Paraguai.',
										'start_date' => \Carbon\Carbon::parse('01-01-1865'),
										'end_date' => \Carbon\Carbon::parse('31-12-1879'),
										[
											'item' => 29,
										],
									],
								],
							],
							'subsection-3' => [
								'title' => ' Governo Provincial',
								'description' => 'Órgãos Provinciais Diversos',
								[
									'serie-36' => [
										'title' => 'CORRESPONDÊNCIA entre a Assembléia Legislativa Provincial e a Câmara Municipal de Juiz de Fora.',
										'start_date' => \Carbon\Carbon::parse('01-01-1868'),
										'end_date' => \Carbon\Carbon::parse('31-12-1888'),
										[
											'item' => 12,
										],
									],
									'serie-37' => [
										'title' => 'CORRESPONDÊNCIA enviada à Câmara Municipal de Ouro Preto pela Câmara Municipal de Juiz de Fora.',
										'description' => 'Contém informações sobre nomeações de Presidentes e Vice-Presidentes da Província,exposições de 1861-62 e engenheiros.',
										'start_date' => \Carbon\Carbon::parse('01-01-1861'),
										'end_date' => \Carbon\Carbon::parse('31-12-1889'),
										[
											'item' => 36,
										],
									],
									'serie-38' => [
										'title' => 'CORRESPONDÊNCIA entre a Comissão de Vacinação e a Câmara Municipal de Juiz de Fora.',
										'start_date' => \Carbon\Carbon::parse('01-01-1858'),
										'end_date' => \Carbon\Carbon::parse('31-12-1871'),
										[
											'item' => 8,
										],
									],
									'serie-39' => [
										'title' => 'CORRESPONDÊNCIA enviada pela Administração Geral dos Correios da Província à Câmara Municipal de Juiz de Fora.',
										'start_date' => \Carbon\Carbon::parse('01-01-1865'),
										'end_date' => \Carbon\Carbon::parse('31-12-1889'),
										[
											'item' => 8,
										],
									],
									'serie-40' => [
										'title' => 'CORRESPONDÊNCIA entre Deputados Provinciais e a Câmara Municipal de Juiz de Fora.',
										'start_date' => \Carbon\Carbon::parse('01-01-1858'),
										'end_date' => \Carbon\Carbon::parse('31-12-1886'),
										[
											'item' => 13,
										],
									],
									'serie-41' => [
										'title' => 'CORRESPONDÊNCIA entre a Diretoria da Fazenda Provincial de Minas Gerais e a Câmara Municipal de Juiz de Fora.',
										'description' => 'A correspondência refere-se a loteria,alimentação de presos pobres, coletoria e outros assuntos.',
										'start_date' => \Carbon\Carbon::parse('01-01-1881'),
										'end_date' => \Carbon\Carbon::parse('31-12-1889'),
										[
											'item' => 27,
										],
									],
									'serie-42' => [
										'title' => 'CORRESPONDÊNCIA enviada pela Diretoria de Instrução Pública à Câmara Municipal de Juiz de Fora.',
										'start_date' => \Carbon\Carbon::parse('01-01-1867'),
										'end_date' => \Carbon\Carbon::parse('31-12-1883'),
										[
											'item' => 5,
										],
									],
									'serie-43' => [
										'title' => 'CORRESPONDÊNCIA entre a Diretoria Geral de Obras Públicas e a Câmara Municipal de Juiz de Fora.',
										'start_date' => \Carbon\Carbon::parse('01-01-1857'),
										'end_date' => \Carbon\Carbon::parse('31-12-1888'),
										[
											'item' => 162,
										],
									],
									'serie-44' => [
										'title' => 'CORRESPONDÊNCIA entre a Inspetoria de Saúde Pública e a Câmara Municipal de Juiz de Fora.',
										'start_date' => \Carbon\Carbon::parse('01-01-1858'),
										'end_date' => \Carbon\Carbon::parse('31-12-1885'),
										[
											'item' => 24,
										],
									],
									'serie-45' => [
										'title' => 'CORRESPONDÊNCIA entre a Mesa de Rendas Provinciais e a Câmara Municipal de Juiz de Fora.',
										'description' => 'Refere-se a despesas de presos pobres,pagamento de obras,casas de negócios e outros assuntos.',
										'start_date' => \Carbon\Carbon::parse('01-01-1853'),
										'end_date' => \Carbon\Carbon::parse('31-12-1874'),
										[
											'item' => 102,
										],
									],
									'serie-46' => [
										'title' => 'CORRESPONDÊNCIA enviada pela Secretaria da Polícia de Ouro Preto à Câmara Municipal de Juiz de Fora.',
										'start_date' => \Carbon\Carbon::parse('01-01-1858'),
										'end_date' => \Carbon\Carbon::parse('31-12-1887'),
										[
											'item' => 7,
										],
									],
									'serie-47' => [
										'title' => 'CORRESPONDÊNCIA entre a Secretaria da Presidência da Província e a Câmara Municipal de Juiz de Fora.',
										'description' => 'Refere-se a agricultura, eleições, Juiz de Direito, Juiz de Órfãos, Juiz de Paz, Juiz Municipal, leis,Promotor Público, sustento de presos pobres e outros assuntos.',
										'start_date' => \Carbon\Carbon::parse('01-01-1853'),
										'end_date' => \Carbon\Carbon::parse('31-12-1889'),
										[
											'item' => 265,
										],
									],
									'serie-48' => [
										'title' => 'CORRESPONDÊNCIA entre a Tesouraria da Fazenda e a Câmara Municipal de Juiz de Fora.',
										'start_date' => \Carbon\Carbon::parse('01-01-1853'),
										'end_date' => \Carbon\Carbon::parse('31-12-1886'),
										[
											'item' => 99,
										],
									],
									'serie-49' => [
										'title' => 'CORRESPONDÊNCIA enviada pela Repartição de Terras Públicas à Câmara Municipal de Juiz de Fora.',
										'start_date' => \Carbon\Carbon::parse('01-01-1858'),
										'end_date' => \Carbon\Carbon::parse('31-12-1858'),
										[
											'item' => 2,
										],
									],
									'serie-50' => [
										'title' => 'CORRESPONDÊNCIA enviada pela Inspetoria Especial de Terras e Colonização à Câmara Municipal de Juiz de Fora,referente a varíola.',
										'start_date' => \Carbon\Carbon::parse('01-01-1889'),
										'end_date' => \Carbon\Carbon::parse('31-12-1889'),
										[
											'item' => 7,
										],
									],
								],
							],
							'subsection-4' => [
								'title' => ' Órgãos e Funcionários Localizados em Juiz de Fora',
								[
									'serie-51' => [
										'title' => 'PROCURAÇÕES do Cartório de Sarandy, referentes a bens imóveis, cobranças, escravos, heranças, hipotecas, inventários, etc.',
										'start_date' => \Carbon\Carbon::parse('01-01-1875'),
										'end_date' => \Carbon\Carbon::parse('31-12-1878'),
										[
											'item' => 183,
										],
									],
									'serie-52' => [
										'title' => 'DOCUMENTOS de diversos cartórios de Juiz de Fora,incluindo os distritos de Rosário, São Pedro de Alcântara, Chapéu d’Uvas e outros.',
										'description' => 'Contém uma escritura de compra e venda de escravos de 1884 e um livro de registros do cartório de Chapéu d’Uvas (1843-1849),um livro de procurações do cartório de Juiz de Fora (1878-1879) e uma escritura de compra e venda de um terreno (1889).',
										'start_date' => \Carbon\Carbon::parse('01-01-1843'),
										'end_date' => \Carbon\Carbon::parse('31-12-1889'),
										[
											'item' => 22,
										],
									],
									'serie-53' => [
										'title' => 'DOCUMENTOS referentes a censos realizados no município de Juiz de Fora.',
										'description' => 'Inclui listas de famílias e uma relação nominal de proprietários de casas na cidade de Juiz de Fora. Os censos são realizados pelo Juiz de Paz (várias listas de famílias estão sem data).',
										'start_date' => \Carbon\Carbon::parse('01-01-1854'),
										'end_date' => \Carbon\Carbon::parse('31-12-1883'),
										[
											'item' => 75,
										],
									],
									'serie-54' => [
										'title' => 'MAPAS da população e listas de famílias referentes a censos realizados nos distritos de Juiz de Fora.',
										'description' => 'Contém um documento relacionando  as principais atividades econômicas do distrito de Chapéu d’Uvas.Os censos são realizados pelo Juiz de Paz. (Várias listas sem data).',
										'start_date' => \Carbon\Carbon::parse('01-01-1854'),
										'end_date' => \Carbon\Carbon::parse('31-12-1877'),
										[
											'item' => 212,
										],
									],
									'serie-55' => [
										'title' => 'DOCUMENTOS referentes ao Delegado de Polícia de Juiz de Fora.',
										'start_date' => \Carbon\Carbon::parse('01-01-1856'),
										'end_date' => \Carbon\Carbon::parse('31-12-1886'),
										[
											'item' => 73,
										],
										[
											'subserie-55.1' => [
												'title' => 'Documentos enviados à Câmara Municipal de Juiz de Fora por diversos delegados de polícia do município.',
												'start_date' => \Carbon\Carbon::parse('01-01-1866'),
												'end_date' => \Carbon\Carbon::parse('31-12-1886'),
												[
													'item' => 55,
												],
											],
											'subserie-55.2' => [
												'title' => 'Documentos recebidos por delegados de polícia de Juiz de Fora.',
												'start_date' => \Carbon\Carbon::parse('01-01-1861'),
												'end_date' => \Carbon\Carbon::parse('31-12-1877'),
												[
													'item' => 12,
												],
											],
											'subserie-55.3' => [
												'title' => 'Documentos diversos referentes a delegados de polícia de Juiz de Fora, incluindo editais.',
												'start_date' => \Carbon\Carbon::parse('01-01-1859'),
												'end_date' => \Carbon\Carbon::parse('31-12-1870'),
												[
													'item' => 6,
												],
											],
										],
									],
									'serie-56' => [
										'title' => 'DOCUMENTOS referentes a subdelegados de polícia de Juiz de Fora.',
										'start_date' => \Carbon\Carbon::parse('01-01-1853'),
										'end_date' => \Carbon\Carbon::parse('31-12-1884'),
										[
											'item' => 97,
										],
										[
											'subserie-56.1' => [
												'title' => 'Correspondência enviada por subdelegados à câmara de Juiz de Fora.',
												'start_date' => \Carbon\Carbon::parse('01-01-1853'),
												'end_date' => \Carbon\Carbon::parse('31-12-1889'),
												[
													'item' => 70,
												],
											],
											'subserie-56.2' => [
												'title' => 'Documentos diversos referentes a subdelegados de polícia de Juiz de Fora, incluindo editais.',
												'start_date' => \Carbon\Carbon::parse('01-01-1853'),
												'end_date' => \Carbon\Carbon::parse('31-12-1889'),
												[
													'item' => 27,
												],
											],
										],
									],
									'serie-57' => [
										'title' => 'DOCUMENTOS referentes a eleições realizadas em Juiz de Fora.',
										'start_date' => \Carbon\Carbon::parse('01-01-1853'),
										'end_date' => \Carbon\Carbon::parse('31-12-1889'),
										[
											'item' => 251,
										],
										[
											'subserie-57.1' => [
												'title' => 'Correspondência enviada à Câmara de Juiz de Fora pelas juntas de Qualificação de Votantes e Mesas Paroquiais referentes a eleições e qualificação de votantes,incluindo ata de eleições nos vários distritos.',
												'start_date' => \Carbon\Carbon::parse('01-01-1854'),
												'end_date' => \Carbon\Carbon::parse('31-12-1882'),
												[
													'item' => 221,
												],
											],
											'subserie-57.2' => [
												'title' => 'Documentos diversos referentes a eleições.Contém carta denunciando fraude eleitoral.',
												'start_date' => \Carbon\Carbon::parse('01-01-1857'),
												'end_date' => \Carbon\Carbon::parse('31-12-1882'),
												[
													'item' => 21,
												],
											],
										],
									],
									'serie-58' => [
										'title' => 'DOCUMENTOS do Escrivão de Paz de Juiz de Fora.',
										'start_date' => \Carbon\Carbon::parse('01-01-1853'),
										'end_date' => \Carbon\Carbon::parse('31-12-1889'),
										[
											'item' => 158,
										],
										[
											'subserie-58.1' => [
												'title' => 'Comunicados enviados à Câmara Municipal de Juiz de Fora pelo Escrivão de Paz,referentes à infração de posturas municipais.',
												'start_date' => \Carbon\Carbon::parse('01-01-1854'),
												'end_date' => \Carbon\Carbon::parse('31-12-1887'),
												[
													'item' => 10,
												],
											],
											'subserie-58.2' => [
												'title' => 'Documentos diversos do Escrivão de Paz de Juiz de Fora.',
												'start_date' => \Carbon\Carbon::parse('01-01-1857'),
												'end_date' => \Carbon\Carbon::parse('31-12-1889'),
												[
													'item' => 17,
												],
											],
										],
									],
									'serie-59' => [
										'title' => 'DOCUMENTOS referentes à Igreja Católica em Juiz de Fora.',
										'start_date' => \Carbon\Carbon::parse('01-01-1854'),
										'end_date' => \Carbon\Carbon::parse('31-12-1889'),
										[
											'item' => 61,
										],
										[
											'subserie-59.1' => [
												'title' => 'Documentos referentes a atestados de residência de padres.',
												'start_date' => \Carbon\Carbon::parse('01-01-1854'),
												'end_date' => \Carbon\Carbon::parse('31-12-1880'),
												[
													'item' => 17,
												],
											],
											'subserie-59.2' => [
												'title' => 'Documentos referentes a Cemitérios.',
												'start_date' => \Carbon\Carbon::parse('01-01-1856'),
												'end_date' => \Carbon\Carbon::parse('31-12-1887'),
												[
													'item' => 12,
												],
											],
											'subserie-59.3' => [
												'title' => 'Correspondência sobre assuntos diversos envolvendo a Igreja.',
												'start_date' => \Carbon\Carbon::parse('01-01-1855'),
												'end_date' => \Carbon\Carbon::parse('31-12-1887'),
												[
													'item' => 16,
												],
											],
											'subserie-59.4' => [
												'title' => 'Correspondência recebida de padres referentes aos livros de nascimento e óbitos de filhos livres de mulher escrava.',
												'start_date' => \Carbon\Carbon::parse('01-01-1875'),
												'end_date' => \Carbon\Carbon::parse('31-12-1875'),
												[
													'item' => 4,
												],
											],
											'subserie-59.5' => [
												'title' => 'Documentos referentes a irmandades.',
												'start_date' => \Carbon\Carbon::parse('01-01-1874'),
												'end_date' => \Carbon\Carbon::parse('31-12-1888'),
												[
													'item' => 6,
												],
											],
											'subserie-59.6' => [
												'title' => 'Documentos referentes a concessão de verbas para a Igreja.',
												'description' => 'Contém um livro de despesas da construção da Igreja Matriz Chapéu d’Uvas,feito pelo “fabriqueiro” da mesma,ao Juiz da Provedoria (1847-1873).',
												'start_date' => \Carbon\Carbon::parse('01-01-1847'),
												'end_date' => \Carbon\Carbon::parse('31-12-1889'),
												[
													'item' => 8,
												],
											],
										],
									],
									'serie-60' => [
										'title' => 'DOCUMENTOS referentes a órgãos arrecadadores de impostos extra-municipais recolhidos em Juiz de Fora.',
										'start_date' => \Carbon\Carbon::parse('01-01-1853'),
										'end_date' => \Carbon\Carbon::parse('31-12-1887'),
										[
											'item' => 115,
										],
										[
											'subserie-60.1' => [
												'title' => 'Documentos enviados pelo Coletor à Câmara referentes a diversos assuntos.',
												'start_date' => \Carbon\Carbon::parse('01-01-1853'),
												'end_date' => \Carbon\Carbon::parse('31-12-1887'),
												[
													'item' => 10,
												],
											],
											'subserie-60.2' => [
												'title' => 'Balancetes da Recebedoria de Iriceira.',
												'start_date' => \Carbon\Carbon::parse('01-01-1855'),
												'end_date' => \Carbon\Carbon::parse('31-12-1861'),
												[
													'item' => 74,
												],
											],
											'subserie-60.3' => [
												'title' => 'Documentos diversos referentes à Recebedoria de Impostos.',
												'start_date' => \Carbon\Carbon::parse('01-01-1853'),
												'end_date' => \Carbon\Carbon::parse('31-12-1887'),
												[
													'item' => 31,
												],
											],
										],
									],
									'serie-61' => [
										'title' => 'DOCUMENTOS referentes ao Juiz de Direito de Juiz de Fora.',
										'start_date' => \Carbon\Carbon::parse('01-01-1853'),
										'end_date' => \Carbon\Carbon::parse('31-12-1889'),
										[
											'item' => 159,
										],
										[
											'subserie-61.1' => [
												'title' => 'Correspondência enviada ao Juiz de Direito.',
												'start_date' => \Carbon\Carbon::parse('01-01-1871'),
												'end_date' => \Carbon\Carbon::parse('31-12-1880'),
												[
													'item' => 21,
												],
											],
											'subserie-61.2' => [
												'title' => 'Correspondência enviada pelo Juiz de Direito ao Presidente da Câmara Municipal de Juiz de Fora.',
												'start_date' => \Carbon\Carbon::parse('01-01-1854'),
												'end_date' => \Carbon\Carbon::parse('31-12-1889'),
												[
													'item' => 52,
												],
											],
											'subserie-61.3' => [
												'title' => 'Relação dos Jurados multados pelo Juiz de Direito.Contém uma lista dos jurados sortiados para participar da sessão do Juri de 1853.',
												'start_date' => \Carbon\Carbon::parse('01-01-1853'),
												'end_date' => \Carbon\Carbon::parse('31-12-1888'),
												[
													'item' => 66,
												],
											],
											'subserie-61.4' => [
												'title' => 'Requerimento de alívio de multa por não comparecimento às sessões do Juri.',
												'start_date' => \Carbon\Carbon::parse('01-01-1874'),
												'end_date' => \Carbon\Carbon::parse('31-12-1880'),
												[
													'item' => 19,
												],
											],
											'subserie-61.5' => [
												'title' => 'Documentos referentes a quantias depositadas junto ao Procurador da Câmara em decorrência de ordem judicial.',
												'start_date' => \Carbon\Carbon::parse('01-01-1884'),
												'end_date' => \Carbon\Carbon::parse('31-12-1884'),
												[
													'item' => 1,
												],
											],
										],
									],
									'serie-62' => [
										'title' => 'DOCUMENTOS do Juiz Municipal e de Órfãos de Juiz de Fora.',
										'start_date' => \Carbon\Carbon::parse('01-01-1853'),
										'end_date' => \Carbon\Carbon::parse('31-12-1889'),
										[
											'item' => 113,
										],
										[
											'subserie-62.1' => [
												'title' => 'Correspondência enviada pelo Juiz Municipal e de órfãos ao Presidente da Câmara',
												'start_date' => \Carbon\Carbon::parse('01-01-1871'),
												'end_date' => \Carbon\Carbon::parse('31-12-1880'),
												[
													'item' => 97,
												],
											],
											'subserie-62.2' => [
												'title' => 'Documentos enviados ao Juiz Municipal e de Órfãos. Contém um processo crime, com depoimento de um escravo.',
												'start_date' => \Carbon\Carbon::parse('01-01-1854'),
												'end_date' => \Carbon\Carbon::parse('31-12-1889'),
												[
													'item' => 16,
												],
											],
										],
									],
									'serie-63' => [
										'title' => 'DOCUMENTOS do Juiz de Paz de Juiz de Fora.',
										'start_date' => \Carbon\Carbon::parse('01-01-1883'),
										'end_date' => \Carbon\Carbon::parse('31-12-1889'),
										[
											'item' => 317,
										],
										[
											'subserie-63.1' => [
												'title' => 'Documentos enviados pelo Juiz de Paz à Câmara referente a diversos assuntos',
												'start_date' => \Carbon\Carbon::parse('01-01-1853'),
												'end_date' => \Carbon\Carbon::parse('31-12-1889'),
												[
													'item' => 41,
												],
											],
											'subserie-63.2' => [
												'title' => 'Documentos enviados pelo Juiz de Paz à Câmara em resposta a ofícios ou circulares',
												'start_date' => \Carbon\Carbon::parse('01-01-1855'),
												'end_date' => \Carbon\Carbon::parse('31-12-1882'),
												[
													'item' => 28,
												],
											],
											'subserie-63.3' => [
												'title' => 'Documentos diversos enviados ao Juiz de Paz.',
												'start_date' => \Carbon\Carbon::parse('01-01-1854'),
												'end_date' => \Carbon\Carbon::parse('31-12-1888'),
												[
													'item' => 54,
												],
											],
											'subserie-63.4' => [
												'title' => 'Correspondência enviada pelo Juiz de Paz ao Presidente da Câmara referente à sucessão de cargo de Juiz de Paz',
												'content' => 'Contém duas relações de Juiz de Paz nos diversos distritos.',
												'start_date' => \Carbon\Carbon::parse('01-01-1855'),
												'end_date' => \Carbon\Carbon::parse('31-12-1888'),
												[
													'item' => 50,
												],
											],
											'subserie-63.5' => [
												'title' => 'Procurações para posse no cargo de Juiz de Paz.',
												'start_date' => \Carbon\Carbon::parse('01-01-1854'),
												'end_date' => \Carbon\Carbon::parse('31-12-1887'),
												[
													'item' => 144,
												],
											],
										],
									],
									'serie-64' => [
										'title' => 'DOCUMENTOS referente à Justiça em Juiz de Fora.',
										'start_date' => \Carbon\Carbon::parse('01-01-1854'),
										'end_date' => \Carbon\Carbon::parse('31-12-1884'),
										[
											'item' => 59,
										],
										[
											'subserie-64.1' => [
												'title' => 'Diplomas de Juiz de Paz e Juiz de Direito.',
												'start_date' => \Carbon\Carbon::parse('01-01-1878'),
												'end_date' => \Carbon\Carbon::parse('31-12-1880'),
												[
													'item' => 7,
												],
											],
											'subserie-64.2' => [
												'title' => 'Documentos diversos referentes à justiça em Juiz de Fora.',
												'start_date' => \Carbon\Carbon::parse('01-01-1856'),
												'end_date' => \Carbon\Carbon::parse('31-12-1884'),
												[
													'item' => 26,
												],
											],
											'subserie-64.3' => [
												'title' => 'Editais diversos,especialmente referentes à posse nos cargos de Juiz de Direito,Juiz Municipal e Juiz de Paz.',
												'start_date' => \Carbon\Carbon::parse('01-01-1854'),
												'end_date' => \Carbon\Carbon::parse('31-12-1886'),
												[
													'item' => 13,
												],
											],
											'subserie-64.4' => [
												'title' => 'Documentos do Escrivão do Juri.Contém uma correspondência do Contado do Juizo.',
												'start_date' => \Carbon\Carbon::parse('01-01-1856'),
												'end_date' => \Carbon\Carbon::parse('31-12-1873'),
												[
													'item' => 3,
												],
											],
											'subserie-64.5' => [
												'title' => 'Correspondência enviada pelo Promotor Público à Câmara Municipal de Juiz de Fora.',
												'start_date' => \Carbon\Carbon::parse('01-01-1855'),
												'end_date' => \Carbon\Carbon::parse('31-12-1874'),
												[
													'item' => 10,
												],
											],
										],
									],
								],
							],
						],
					],
					'section-2' => [
						'title' => 'ADMINISTRAÇÃO MUNICIPAL',
						[
							'subsection-1' => [
								'title' => 'ASSUNTOS DIVERSOS',
								[
									'serie-65' => [
										'title' => 'DOCUMENTOS referentes a bens da Câmara Municipal de Juiz de Fora',
										'description' => '',
										'start_date' => \Carbon\Carbon::parse('01-01-1859'),
										'end_date' => \Carbon\Carbon::parse('31-12-1888'),
										[
											'item' => 154
										],
										[
											'subserie-65.1' => [
												'title' => 'Documentos referentes a arrendamentos dos bens da Câmara.',
												'start_date' => \Carbon\Carbon::parse('01-01-1875'),
												'end_date' => \Carbon\Carbon::parse('31-12-1887'),
												[
													'item' => 11
												]
											],
											'subserie-65.2' => [
												'title' => 'Propostas de arrendamento de bens da Câmara.',
												'start_date' => \Carbon\Carbon::parse('01-01-1880'),
												'end_date' => \Carbon\Carbon::parse('31-12-1889'),
												[
													'item' => 34
												]
											],
											'subserie-65.3' => [
												'title' => 'Documentos diversos referentes a bens da Câmara.',
												'start_date' => \Carbon\Carbon::parse('01-01-1865'),
												'end_date' => \Carbon\Carbon::parse('31-12-1886'),
												[
													'item' => 11
												]
											],
											'subserie-65.4' => [
												'title' => 'Escritura de doação,permuta,compra e venda de bens da Câmara.',
												'start_date' => \Carbon\Carbon::parse('01-01-1860'),
												'end_date' => \Carbon\Carbon::parse('31-12-1888'),
												[
													'item' => 45
												]
											],
											'subserie-65.5' => [
												'title' => 'Documentos referentes a leilões de bens da Câmara.',
												'start_date' => \Carbon\Carbon::parse('01-01-1859'),
												'end_date' => \Carbon\Carbon::parse('31-12-1886'),
												[
													'item' => 14
												]
											],
											'subserie-65.6' => [
												'title' => 'Listas de bens da Câmara.',
												'start_date' => \Carbon\Carbon::parse('01-01-1867'),
												'end_date' => \Carbon\Carbon::parse('31-12-1878'),
												[
													'item' => 4
												]
											],
											'subserie-65.7' => [
												'title' => 'Requerimentos referentes a compra,venda e permuta de bens da Câmara.',
												'start_date' => \Carbon\Carbon::parse('01-01-1855'),
												'end_date' => \Carbon\Carbon::parse('31-12-1889'),
												[
													'item' => 35
												]
											],
										]
									],
									'serie-66' => [
										'title' => 'CORRESPONDÊNCIA da Câmara Municipal de Juiz de Fora com Câmaras Municipais',
										'description' => '',
										'start_date' => \Carbon\Carbon::parse('01-01-1857'),
										'end_date' => \Carbon\Carbon::parse('31-12-1889'),
										[
											'item' => 29
										]
									],
									'serie-67' => [
										'title' => 'CORRESPONDÊNCIA da Câmara Municipal de Juiz de Fora sobre assuntos diversos',
										'description' => '',
										'start_date' => \Carbon\Carbon::parse('01-01-1859'),
										'end_date' => \Carbon\Carbon::parse('31-12-1888'),
										[
											'item' => 22
										]
									],
									'serie-68' => [
										'title' => 'EDITAIS da Câmara Municipal de Juiz de Fora',
										'description' => '',
										'start_date' => \Carbon\Carbon::parse('01-01-1853'),
										'end_date' => \Carbon\Carbon::parse('31-12-1889'),
										[
											'item' => 58
										],
										[
											'subserie-68.1' => [
												'title' => 'Editais relativos ao desmembramento de freguesias',
												'start_date' => \Carbon\Carbon::parse('01-01-1866'),
												'end_date' => \Carbon\Carbon::parse('31-12-1866'),
												[
													'item' => 7
												]
											],
											'subserie-68.2' => [
												'title' => 'Editais referentes a assuntos diversos.Contém editais que dam publicidade à Lei 2040 de 28 de setembro de 1871',
												'start_date' => \Carbon\Carbon::parse('01-01-1853'),
												'end_date' => \Carbon\Carbon::parse('31-12-1889'),
												[
													'item' => 51
												]
											],
										]
									],
									'serie-69' => [
										'title' => 'DOCUMENTOS referentes à Exposição Industrial de Juiz de Fora (1886)',
										'description' => '',
										'start_date' => \Carbon\Carbon::parse('01-01-1855'),
										'end_date' => \Carbon\Carbon::parse('31-12-1887'),
										[
											'item' => 132
										],
										[
											'subserie-69.1' => [
												'title' => 'Ofícios expedidos pela Câmara Municipal de Juiz de Fora referentes a Exposição Industrial de 1886',
												'start_date' => \Carbon\Carbon::parse('01-01-1855'),
												'end_date' => \Carbon\Carbon::parse('31-12-1886'),
												[
													'item' => 27
												],
											],
											'subserie-69.2' => [
												'title' => 'Ofícios recebidos pela Câmara Municipal de Juiz de Fora referente à Exposição de 1886',
												'start_date' => \Carbon\Carbon::parse('01-01-1883'),
												'end_date' => \Carbon\Carbon::parse('31-12-1887'),
												[
													'item' => 50
												],
											],
											'subserie-69.3' => [
												'title' => 'Documentos diversos referentes à Exposição Industrial de 1886',
												'start_date' => \Carbon\Carbon::parse('01-01-1885'),
												'end_date' => \Carbon\Carbon::parse('31-12-1886'),
												[
													'item' => 11
												],
											],
										]
									],
									'serie-70' => [
										'title' => 'DOCUMENTOS referentes a diversas exposições.',
										'description' => 'Contém ofícios recebidos pela Câmara de Juiz de Fora provenientes da Côrte,da Província e de Petrópolis referentes à diversas exposições:de produtos naturais e industriais,de produtos sul-americanos em Berlim,etc e outros documentos.',
										'start_date' => \Carbon\Carbon::parse('01-01-1861'),
										'end_date' => \Carbon\Carbon::parse('31-12-1888'),
										[
											'item' => 40
										]
									],
									'serie-71' => [
										'title' => 'DOCUMENTOS referentes à instrução pública.',
										'description' => 'Contém correspondência sobre novos métodos de ensino e correspondência entre a Câmara de Juiz de Fora e professores públicos,Delegado de Instrução Pública,Inspetor do Círculo Literário,Inspetor Municipal de Instrução,Secretário da Câmara e particulares.',
										'start_date' => \Carbon\Carbon::parse('01-01-1854'),
										'end_date' => \Carbon\Carbon::parse('31-12-1889'),
										[
											'item' => 29
										]
									],
									'serie-72' => [
										'title' => 'DOCUMENTOS referentes à Loteria Municipal.',
										'description' => '',
										'start_date' => \Carbon\Carbon::parse('01-01-1886'),
										'end_date' => \Carbon\Carbon::parse('31-12-1888'),
										[
											'item' => 43
										],
										[
											'subserie-72.1' => [
												'title' => 'Documentos da Câmara de Juiz de Fora referentes à loteria municipal.',
												'start_date' => \Carbon\Carbon::parse('01-01-1886'),
												'end_date' => \Carbon\Carbon::parse('31-12-1888'),
												[
													'item' => 23
												],
											],
											'subserie-72.2' => [
												'title' => 'Documentos referentes aos responsáveis e funcionários da loteria municipal.',
												'start_date' => \Carbon\Carbon::parse('01-01-1886'),
												'end_date' => \Carbon\Carbon::parse('31-12-1888'),
												[
													'item' => 23
												],
											],
										]
									],
									'serie-73' => [
										'title' => 'DOCUMENTOS referentes à saúde pública em Juiz de Fora.',
										'description' => '',
										'start_date' => \Carbon\Carbon::parse('01-01-1855'),
										'end_date' => \Carbon\Carbon::parse('31-12-1889'),
										[
											'item' => 153
										],
										[
											'subserie-73.1' => [
												'title' => 'Atestados médicos.',
												'start_date' => \Carbon\Carbon::parse('01-01-1862'),
												'end_date' => \Carbon\Carbon::parse('31-12-1878'),
												[
													'item' => 8
												],
											],
											'subserie-73.2' => [
												'title' => 'Documentos referente à epidemia de cólera.',
												'start_date' => \Carbon\Carbon::parse('01-01-1855'),
												'end_date' => \Carbon\Carbon::parse('31-12-1856'),
												[
													'item' => 20
												],
											],
											'subserie-73.3' => [
												'title' => 'Documentos diversos relativos à saúde pública.',
												'start_date' => \Carbon\Carbon::parse('01-01-1855'),
												'end_date' => \Carbon\Carbon::parse('31-12-1889'),
												[
													'item' => 35
												],
											],
											'subserie-73.4' => [
												'title' => 'Documentos referentes ao pagamento de contas de hospital.',
												'start_date' => \Carbon\Carbon::parse('01-01-1855'),
												'end_date' => \Carbon\Carbon::parse('31-12-1856'),
												[
													'item' => 14
												],
											],
											'subserie-73.5' => [
												'title' => 'Documentos referentes ao fornecimento de medicamentos à pobres e indigentes.',
												'start_date' => \Carbon\Carbon::parse('01-01-1869'),
												'end_date' => \Carbon\Carbon::parse('31-12-1887'),
												[
													'item' => 27
												],
											],
											'subserie-73.6' => [
												'title' => 'Documentos referentes aos lazaretos.',
												'start_date' => \Carbon\Carbon::parse('01-01-1871'),
												'end_date' => \Carbon\Carbon::parse('31-12-1889'),
												[
													'item' => 7
												],
											],
											'subserie-73.7' => [
												'title' => 'Documentos referentes ao serviço de vacinação.',
												'start_date' => \Carbon\Carbon::parse('01-01-1862'),
												'end_date' => \Carbon\Carbon::parse('31-12-1889'),
												[
													'item' => 21
												],
											],
											'subserie-73.8' => [
												'title' => 'Correspondência enviada à Câmara de Juiz de Fora pelo médico encarregado do tratamento dos portadores de varíola do distrito de Vargem Grande.',
												'start_date' => \Carbon\Carbon::parse('01-01-1889'),
												'end_date' => \Carbon\Carbon::parse('31-12-1889'),
												[
													'item' => 13
												],
											],
											'subserie-73.9' => [
												'title' => 'Requerimentos pedindo providências sobre varíola em Juiz de Fora.',
												'start_date' => \Carbon\Carbon::parse('01-01-1885'),
												'end_date' => \Carbon\Carbon::parse('31-12-1889'),
												[
													'item' => 8
												],
											],
										]
									],
								]
							],
							'subsection-2' => [
								'title' => 'FINANÇAS DO MUNICÍPIO',
								[
									'serie-74' => [
										'title' => 'DOCUMENTOS referentes aos lançamentos contábeis dos anos financeiros.',
										'description' => 'Esta série está dividida em subséries contendo a documentação referente a cada ano financeiro.A notação de cada subsérie se faz através da indicação do número da série e dos números referentes ao ano financeiro.A composição das sub-séries está contida na primeira sub-série,para consulta do pesquisador,não sendo reproduzida neste inventário.
										O ano financeiro está dividido,até 1880,nos seguintes trimestres:out./dez.;jan./mar.;abr./jun.;jul./set.;.A partir de 1881 o ano financeiro começa em janeiro e termina em dezembro do mesmo ano civil.O ano financeiro de 1853,ano da instalação da Câmara,não tem o primeiro trimestre (out./dez.) e o segundo trimestre (jan./mar.) que pertence ao ano civil anterior.O ano financeiro iniciou-se no terceiro trimestre (abr./jun.).
										Os documentos arranjados dentro de cada sub-série constam de três grupos:
											 1)Diários,onde são feitos os lançamentos de receita e despesa da Câmara.
											 2)Recibos,que estão soltos ou agrupados em livros.
											 3)Documentos  diversos,que contêm documentos referentes ao ano financeiro.
										Nem todos os anos financeiros possuem os três grupos de documentos que certamente se perderam com o tempo.',
										'start_date' => \Carbon\Carbon::parse('01-01-1853'),
										'end_date' => \Carbon\Carbon::parse('31-12-1889'),
										[
											'item' => 2797
										],
									],
									'serie-75' => [
										'title' => 'DOCUMENTOS referentes ao pagamento de custas judiciais devidas pela Câmara de Juiz de Fora.',
										'description' => '',
										'start_date' => \Carbon\Carbon::parse('01-01-1863'),
										'end_date' => \Carbon\Carbon::parse('31-12-1889'),
										[
											'item' => 281
										],
										[
											'subserie-75.1' => [
												'title' => 'Documentos referentes ao pagamento de custas judiciais feito por intermédio de apólices.',
												'start_date' => \Carbon\Carbon::parse('01-01-1884'),
												'end_date' => \Carbon\Carbon::parse('31-12-1889'),
												[
													'item' => 233
												],
											],
											'subserie-75.2' => [
												'title' => 'Documentos referentes ao pagamento de custas judiciais feito em dinheiro.',
												'start_date' => \Carbon\Carbon::parse('01-01-1887'),
												'end_date' => \Carbon\Carbon::parse('31-12-1888'),
												[
													'item' => 6
												],
											],
											'subserie-75.3' => [
												'title' => 'Documentos referentes à solicitação de pagamento de custas judiciais.Não há comprovação se o pagamento foi efetuado.',
												'start_date' => \Carbon\Carbon::parse('01-01-1863'),
												'end_date' => \Carbon\Carbon::parse('31-12-1889'),
												[
													'item' => 41
												],
											],
											'subserie-75.4' => [
												'title' => 'Documentos referentes às custas de processos de multas contra jurados.',
												'start_date' => \Carbon\Carbon::parse('01-01-1888'),
												'end_date' => \Carbon\Carbon::parse('31-12-1888'),
												[
													'item' => 1
												],
											],
										]
									],
									'serie-76' => [
										'title' => 'DOCUMENTOS diversos referentes às finanças da Câmara de Juiz de Fora.',
										'description' => 'Contém documentos de pagamentos diversos à Câmara e resumos trimestrais da receita e despesa,sem data.',
										'start_date' => \Carbon\Carbon::parse('01-01-1854'),
										'end_date' => \Carbon\Carbon::parse('31-12-1888'),
										[
											'item' => 53
										],
									],
									'serie-77' => [
										'title' => 'DOCUMENTOS referentes à dívida pública do município de Juiz de Fora.',
										'description' => '',
										'start_date' => \Carbon\Carbon::parse('01-01-1863'),
										'end_date' => \Carbon\Carbon::parse('31-12-1889'),
										[
											'item' => 108
										],
										[
											'subserie-77.1' => [
												'title' => 'Documentos diversos referentes à divida pública municipal.Contém uma apólice da dívida.',
												'start_date' => \Carbon\Carbon::parse('01-01-1863'),
												'end_date' => \Carbon\Carbon::parse('31-12-1889'),
												[
													'item' => 7
												],
											],
											'subserie-77.2' => [
												'title' => 'Documentos referentes a juros sobre apólices dos empréstimos municipais.',
												'start_date' => \Carbon\Carbon::parse('01-01-1885'),
												'end_date' => \Carbon\Carbon::parse('31-12-1889'),
												[
													'item' => 3
												],
											],
											'subserie-77.3' => [
												'title' => 'Documentos referentes à transferência de apólices da dívida pública municipal.',
												'start_date' => \Carbon\Carbon::parse('01-01-1886'),
												'end_date' => \Carbon\Carbon::parse('31-12-1889'),
												[
													'item' => 19
												],
											],
											'subserie-77.4' => [
												'title' => 'Procurações referentes à venda,subscrição e recebimento de juros e amortização do empréstimo municipal.',
												'start_date' => \Carbon\Carbon::parse('01-01-1875'),
												'end_date' => \Carbon\Carbon::parse('31-12-1889'),
												[
													'item' => 26
												],
											],
											'subserie-77.5' => [
												'title' => 'Relações nominais de portadores de apólices da dívida pública municipal.',
												'start_date' => \Carbon\Carbon::parse('01-01-1885'),
												'end_date' => \Carbon\Carbon::parse('31-12-1890'),
												[
													'item' => 15
												],
											],
										]
									],
									'serie-78' => [
										'title' => 'DOCUMENTOS referentes ao pagamento de impostos municipais.',
										'description' => '',
										'start_date' => \Carbon\Carbon::parse('01-01-1855'),
										'end_date' => \Carbon\Carbon::parse('31-12-1880'),
										[
											'item' => 66
										],
										[
											'subserie-78.1' => [
												'title' => 'Documentos referentes ao pagamento de impostos municipais.',
												'start_date' => \Carbon\Carbon::parse('01-01-1855'),
												'end_date' => \Carbon\Carbon::parse('31-12-1880'),
												[
													'item' => 45
												],
											],
											'subserie-78.2' => [
												'title' => 'Cadernos de registros de talões de pagamento de impostos sobre casas de negócios.Contém uma relação das casas de negócios e oficinas de Juiz de Fora em 1870.Este imposto era controlado pela Mesa das Rendas Provinciais.',
												'start_date' => \Carbon\Carbon::parse('01-01-1874'),
												'end_date' => \Carbon\Carbon::parse('31-12-1875'),
												[
													'item' => 21
												],
											],
										]
									],
									'serie-79' => [
										'title' => 'DOCUMENTOS referentes a pagamentos diversos efetuados pela Câmara de Juiz de Fora.',
										'description' => '',
										'start_date' => \Carbon\Carbon::parse('01-01-1864'),
										'end_date' => \Carbon\Carbon::parse('31-12-1889'),
										[
											'item' => 16
										],
									],
									'serie-80' => [
										'title' => 'DOCUMENTOS referentes ao pagamento de serviços de alargamento do Rio Paraibuna,em 1889.',
										'description' => '',
										'start_date' => \Carbon\Carbon::parse('01-01-1889'),
										'end_date' => \Carbon\Carbon::parse('31-12-1889'),
										[
											'item' => 9
										],
									],
								]
							],
							'subsection-3' => [
								'title' => 'FISCAL E AGENTE FISCAL',
								[
									'serie-81' => [
										'title' => 'DOCUMENTOS referentes ao cargo de Fiscal da Câmara de Juiz de Fora.',
										'description' => '',
										'start_date' => \Carbon\Carbon::parse('01-01-1853'),
										'end_date' => \Carbon\Carbon::parse('31-12-1889'),
										[
											'item' => 76
										],
										[
											'subserie-81.1' => [
												'title' => 'Documentos diversos referentes ao cargo de Fiscal.Referem-se a nomeações de posse,demissão,licença,substituição e justificativas de ausências.',
												'start_date' => \Carbon\Carbon::parse('01-01-1853'),
												'end_date' => \Carbon\Carbon::parse('31-12-1889'),
												[
													'item' => 54
												],
											],
											'subserie-81.2' => [
												'title' => 'Procurações para tomar posse do cargo Fiscal.',
												'start_date' => \Carbon\Carbon::parse('01-01-1854'),
												'end_date' => \Carbon\Carbon::parse('31-12-1888'),
												[
													'item' => 31
												],
											],
										]
									],
									'serie-82' => [
										'title' => 'CORRESPONDÊNCIA enviada à Câmara de Juiz de Fora por Agentes Fiscais de diversos distritos de município de Juiz de Fora.',
										'description' => 'Referente aos distritos de Chácara (1878-1889,20 ítens,incluindo uma carta recebida pelo Agente Fiscal);Chapéu d\'Uvas (1853-1889,40 ítens);Piau (1866-1868,4 ítens);Rosário (1870-1889,16 ítens);Santana do Deserto (1884-1889,5 ítens);Santa Bárbara do Monte Verde (1868-1869,7 ítens);Santa Rita do Jacutinga (1856,1 ítem);São Francisco de Paula (1853-1880,14 ítens);São José do Rio Preto (1854-1888,25 ítens);São Pedro de Alcântara (1859-1888,20 ítens);Sarandy (1859-1887,29 ítens);Simão Pereira (185...,1 ítem);Vargem Grande (1861-1889,24 ítens).',
										'start_date' => \Carbon\Carbon::parse('01-01-1853'),
										'end_date' => \Carbon\Carbon::parse('31-12-1889'),
										[
											'item' => 204
										],
									],
									'serie-83' => [
										'title' => 'DOCUMENTOS diversos do Fiscal da Câmara de Juiz de Fora.',
										'description' => '',
										'start_date' => \Carbon\Carbon::parse('01-01-1858'),
										'end_date' => \Carbon\Carbon::parse('31-12-1889'),
										[
											'item' => 14
										],
									],
									'serie-84' => [
										'title' => 'CORRESPONDÊNCIA recebida pelos Fiscais da Câmara referente a assuntos diversos.',
										'description' => 'A correspondência foi enviada pelo Presidente e Secretário da Câmara de Juiz de Fora,Agentes Fiscais de distritos e particulares.',
										'start_date' => \Carbon\Carbon::parse('01-01-1853'),
										'end_date' => \Carbon\Carbon::parse('31-12-1889'),
										[
											'item' => 34
										],
									],
									'serie-85' => [
										'title' => 'CORRESPONDÊNCIA enviada à Câmara por Fiscais,referentes a diversos assuntos.',
										'description' => 'Nada consta sobre os anos de 1962,65,66,74,75,80 e 1882.',
										'start_date' => \Carbon\Carbon::parse('01-01-1856'),
										'end_date' => \Carbon\Carbon::parse('31-12-1889'),
										[
											'item' => 93
										],
									],
									'serie-86' => [
										'title' => 'CORRESPONDÊNCIA enviada à Câmara de Juiz de Fora pelo Fiscal referente a ferrovia (Estrada de Ferro D. Pedro II) e bondes (Companhia Ferro-Carril de Juiz de Fora).',
										'description' => '',
										'start_date' => \Carbon\Carbon::parse('01-01-1882'),
										'end_date' => \Carbon\Carbon::parse('31-12-1885'),
										[
											'item' => 11
										],
									],
									'serie-87' => [
										'title' => 'DOCUMENTOS do Fiscal da Câmara de Juiz de Fora referentes a impostos municipais.',
										'description' => 'Contém relações de pessoas sujeitas a pagamento de impostos.',
										'start_date' => \Carbon\Carbon::parse('01-01-1864'),
										'end_date' => \Carbon\Carbon::parse('31-12-1884'),
										[
											'item' => 7
										],
									],
									'serie-88' => [
										'title' => 'CORRESPONDÊNCIA enviada à Camara de Juiz de Fora por Fiscais,referente a obras e serviços executados.',
										'description' => '',
										'start_date' => \Carbon\Carbon::parse('01-01-1854'),
										'end_date' => \Carbon\Carbon::parse('31-12-1889'),
										[
											'item' => 121
										],
									],
									'serie-89' => [
										'title' => 'CORRESPONDÊNCIA enviada à Câmara de Juiz de Fora pelo Fiscal referente a órgãos municipais:Jardim Público e Matadouro.',
										'description' => '',
										'start_date' => \Carbon\Carbon::parse('01-01-1863'),
										'end_date' => \Carbon\Carbon::parse('31-12-1889'),
										[
											'item' => 19
										],
									],
									'serie-90' => [
										'title' => 'DOCUMENTOS do Fiscal da Câmara de Juiz de Fora referentes a posturas municipais.',
										'description' => 'Contém autos de infração referentes a multas por desrespeito às posturas e editais do Fiscal referentes a posturas.',
										'start_date' => \Carbon\Carbon::parse('01-01-1859'),
										'end_date' => \Carbon\Carbon::parse('31-12-1881'),
										[
											'item' => 21
										],
									],
									'serie-91' => [
										'title' => 'DOCUMENTOS do Fiscal da Câmara de Juiz de Fora referentes a serviços públicos:água,iluminação e limpeza pública.',
										'description' => '',
										'start_date' => \Carbon\Carbon::parse('01-01-1853'),
										'end_date' => \Carbon\Carbon::parse('31-12-1889'),
										[
											'item' => 61
										],
									],
									'serie-92' => [
										'title' => 'RELATÓRIOS apresentados à Câmara de Juiz de Fora por Fiscais,referentes à diversos serviços executados.',
										'description' => 'Contém mapas demonstrativos de infrações de posturas.Faltam relatórios dos anos de 1858,59,60 e 1884.',
										'start_date' => \Carbon\Carbon::parse('01-01-1854'),
										'end_date' => \Carbon\Carbon::parse('31-12-1888'),
										[
											'item' => 191
										],
									],
								]
							],
							'subsection-4' => [
								'title' => 'FUNCIONÁRIOS DIVERSOS',
								[
									'serie-93' => [
										'title' => 'CORRESPONDÊNCIA enviada por advogados à Câmara de Juiz de Fora sobre assuntos diversos.',
										'description' => 'Os advogados estão a serviço da Câmara.',
										'start_date' => \Carbon\Carbon::parse('01-01-1863'),
										'end_date' => \Carbon\Carbon::parse('31-12-1889'),
										[
											'item' => 18
										],
									],
									'serie-94' => [
										'title' => 'DOCUMENTOS referentes aos alinhadores da Câmara de Juiz de Fora.',
										'description' => 'Contém correspondência entre alinhadores e a Câmara,orçamentos feitos pelos alinhadores,nomeações de alinhadores,memorial de plantas,uma carta do Fiscal da Câmara sobre orçamento,etc.',
										'start_date' => \Carbon\Carbon::parse('01-01-1865'),
										'end_date' => \Carbon\Carbon::parse('31-12-1889'),
										[
											'item' => 80
										],
									],
									'serie-95' => [
										'title' => 'CORRESPONDÊNCIA expedida pelo Conservador de Águas ao Presidente da Câmara de Juiz de Fora.',
										'description' => 'Contém correspondência,orçamentos,nomeações,etc.Algumas cartas estão assinadas pelo conservador THOMAS J. WOOD como conservador de obras e fiscal de obras e empreiteiras das obras de abastecimento de águas.
										Contém cartas do engenheiro Fiscal das obras de abastecimento de água,JOSUÉ QUEIRÓS e do Inspetor de Águas.',
										'start_date' => \Carbon\Carbon::parse('01-01-1885'),
										'end_date' => \Carbon\Carbon::parse('31-12-1889'),
										[
											'item' => 61
										],
									],
									'serie-96' => [
										'title' => 'CORRESPONDÊNCIA enviada por engenheiros à Câmara de Juiz de Fora.',
										'description' => '',
										'start_date' => \Carbon\Carbon::parse('01-01-1867'),
										'end_date' => \Carbon\Carbon::parse('31-12-1886'),
										[
											'item' => 22
										],
									],
									'serie-97' => [
										'title' => 'DOCUMENTOS do estafeta\caminheiro da Câmara,sobre assuntos diversos.',
										'description' => '',
										'start_date' => \Carbon\Carbon::parse('01-01-1857'),
										'end_date' => \Carbon\Carbon::parse('31-12-1887'),
										[
											'item' => 21
										],
									],
									'serie-98' => [
										'title' => 'DOCUMENTOS referentes ao Porteiro da Câmara de Juiz de Fora.',
										'description' => 'Contém correspondência enviada ao Presidente da Câmara e editais do Presidente da Câmara.',
										'start_date' => \Carbon\Carbon::parse('01-01-1885'),
										'end_date' => \Carbon\Carbon::parse('31-12-1886'),
										[
											'item' => 25
										],
									],
									'serie-99' => [
										'title' => 'DOCUMENTOS referentes a diversos funcionários da Câmara de Juiz de Fora.',
										'description' => '',
										'start_date' => \Carbon\Carbon::parse('01-01-1856'),
										'end_date' => \Carbon\Carbon::parse('31-12-1886'),
										[
											'item' => 91
										],
										[
											'subserie-99.1' => [
												'title' => 'Livro contendo termos de juramentos de cargos de funcionários de Câmara de Juiz de Fora.',
												'start_date' => \Carbon\Carbon::parse('01-01-1874'),
												'end_date' => \Carbon\Carbon::parse('31-12-1876'),
												[
													'item' => 6
												],
											],
											'subserie-99.2' => [
												'title' => 'Procurações para tomar posse de cargos públicos perante a Câmara de Juiz de Fora.Contém 3 procurações com outras finalidades,passadas na Câmara.',
												'start_date' => \Carbon\Carbon::parse('01-01-1854'),
												'end_date' => \Carbon\Carbon::parse('31-12-1889'),
												[
													'item' => 13
												],
											],
											'subserie-99.3' => [
												'title' => 'Requerimentos solicitando nomeações para cargos municipais,especialmente Fiscal,Porteiro,Estafeta,administrador da Praça do Mercado,Curral do Conselho e Chafariz,Cocheiro ou Condutor de carroças e outros.Contém 3 nomeações de Guarda Fiscal.',
												'start_date' => \Carbon\Carbon::parse('01-01-1856'),
												'end_date' => \Carbon\Carbon::parse('31-12-1889'),
												[
													'item' => 91
												],
											],
											'subserie-99.4' => [
												'title' => 'Documentos de funcionários diversos:Conservador do Jardim Municipal,Administrador da Praça do Mercado e Curral do Conselho e Chafariz.',
												'start_date' => \Carbon\Carbon::parse('01-01-1887'),
												'end_date' => \Carbon\Carbon::parse('31-12-1887'),
												[
													'item' => 3
												],
											],
										]
									],
								]
							],
							'subsection-5' => [
								'title' => 'OBRAS E SERVIÇOS PÚBLICOS',
								[
									'serie-100' => [
										'title' => 'DOCUMENTOS referentes ao serviço de abastecimentode água de Juiz de Fora.',
										'description' => 'Contém cartas referentes à canalização de córregos,consertos em esgotos e no reservatório de água,cartas de arrematação,orçamentos e propostas.',
										'start_date' => \Carbon\Carbon::parse('01-01-1858'),
										'end_date' => \Carbon\Carbon::parse('31-12-1889'),
										[
											'item' => 80,
										],
									],
									'serie-101' => [
										'title' => 'DOCUMENTOS referentes às obras de sistema de abastecimento de água de Juiz de Fora.',
										'description' => '',
										'start_date' => \Carbon\Carbon::parse('01-01-1880'),
										'end_date' => \Carbon\Carbon::parse('31-12-1889'),
										[
											'item' => 140
										],
										[
											'subserie-101.1' => [
												'title' => 'Documento diversos referentes ao sistema de abastecimento de água de Juiz de Fora.',
												'start_date' => \Carbon\Carbon::parse('01-01-1886'),
												'end_date' => \Carbon\Carbon::parse('31-12-1887'),
												[
													'item' => 18
												],
											],
											'subserie-101.2' => [
												'title' => 'Correspondência do empreiteiro das obras de abastecimento de água de Juiz de Fora,THOMAS J. WOOD.',
												'start_date' => \Carbon\Carbon::parse('01-01-1883'),
												'end_date' => \Carbon\Carbon::parse('31-12-1887'),
												[
													'item' => 53
												],
											],
											'subserie-101.3' => [
												'title' => 'Correspondência do engenheiro fiscal e do fiscal das obras de abastecimento de água de Juiz de Fora.',
												'start_date' => \Carbon\Carbon::parse('01-01-1886'),
												'end_date' => \Carbon\Carbon::parse('31-12-1887'),
												[
													'item' => 9
												],
											],
											'subserie-101.4' => [
												'title' => 'Correspondência do Banco do Brasil e de comissários à Câmara de Juiz de Fora,referente ao pagamento e remessa de material para o serviço das obras de abastecimento de água.',
												'start_date' => \Carbon\Carbon::parse('01-01-1885'),
												'end_date' => \Carbon\Carbon::parse('31-12-1887'),
												[
													'item' => 27
												],
											],
											'subserie-101.5' => [
												'title' => 'Documentos contendo estudos e projetos sobre o abastecimento de águas e esgotos de Juiz de Fora.',
												'start_date' => \Carbon\Carbon::parse('01-01-1885'),
												'end_date' => \Carbon\Carbon::parse('31-12-1889'),
												[
													'item' => 5
												],
											],
											'subserie-101.6' => [
												'title' => 'Propostas aceitas e recusadas,apresentadas à Câmara,referente ao abastecimento de água.
												Contém a proposta de THOMAS J. WOOD,que foi aceita.',
												'start_date' => \Carbon\Carbon::parse('01-01-1880'),
												'end_date' => \Carbon\Carbon::parse('31-12-1884'),
												[
													'item' => 28
												],
											],
										]
									],
									'serie-102' => [
										'title' => 'DOCUMENTOS referentes à construção e reforma de bueiros,canais e valetas em Juiz de Fora.',
										'description' => '',
										'start_date' => \Carbon\Carbon::parse('01-01-1857'),
										'end_date' => \Carbon\Carbon::parse('31-12-1889'),
										[
											'item' => 115
										],
										[
											'subserie-102.1' => [
												'title' => 'Correspondência do arrematante dos serviços de construção e reforma de bueiros,canais e valetas.Contém outros documentos referentes aos serviços.',
												'start_date' => \Carbon\Carbon::parse('01-01-1871'),
												'end_date' => \Carbon\Carbon::parse('31-12-1887'),
												[
													'item' => 22
												],
											],
											'subserie-102.2' => [
												'title' => 'Documentos referentes a contratos para a execução dos serviços.',
												'start_date' => \Carbon\Carbon::parse('01-01-1857'),
												'end_date' => \Carbon\Carbon::parse('31-12-1882'),
												[
													'item' => 4
												],
											],
											'subserie-102.3' => [
												'title' => 'Documentos diversos referentes aos serviços de construção e reforma de bueiros,canais e valetas em Juiz de Fora.Contém editais,procurações,pareceres e documentos de pagamento dos direitos de arrematação.',
												'start_date' => \Carbon\Carbon::parse('01-01-1858'),
												'end_date' => \Carbon\Carbon::parse('31-12-1888'),
												[
													'item' => 13
												],
											],
											'subserie-102.4' => [
												'title' => 'Documentos referentes a orçamentos para os serviços de construção e reforma de bueiros...',
												'start_date' => \Carbon\Carbon::parse('01-01-1861'),
												'end_date' => \Carbon\Carbon::parse('31-12-1886'),
												[
													'item' => 16
												],
											],
											'subserie-102.5' => [
												'title' => 'Documentos contendo propostas (aceitas,recusadas e sem definição)para os serviços de construção e reformas de bueiros...',
												'start_date' => \Carbon\Carbon::parse('01-01-1858'),
												'end_date' => \Carbon\Carbon::parse('31-12-1889'),
												[
													'item' => 56
												],
											],
										]
									],
									'serie-103' => [
										'title' => 'DOCUMENTOS referentes à obras de construção e reforma da cadeia pública de Juiz de Fora.',
										'description' => 'Contém orçamento,propostas de arrematação,contratos e cartas do arrematante à Câmara.',
										'start_date' => \Carbon\Carbon::parse('01-01-1857'),
										'end_date' => \Carbon\Carbon::parse('31-12-1889'),
										[
											'item' => 24
										],
									],
									'serie-104' => [
										'title' => 'DOCUMENTOS referentes à construção do Cemitério público de Juiz de Fora.',
										'description' => '',
										'start_date' => \Carbon\Carbon::parse('01-01-1863'),
										'end_date' => \Carbon\Carbon::parse('31-12-1873'),
										[
											'item' => 16
										],
									],
									'serie-105' => [
										'title' => 'DOCUMENTOS referentes a obras de melhoria e conservação de estradas.',
										'description' => '',
										'start_date' => \Carbon\Carbon::parse('01-01-1857'),
										'end_date' => \Carbon\Carbon::parse('31-12-1874'),
										[
											'item' => 13
										],
									],
									'serie-106' => [
										'title' => 'DOCUMENTOS referentes às obras de conserto do prédio do Fórum da cidade de Juiz de Fora.',
										'description' => '',
										'start_date' => \Carbon\Carbon::parse('01-01-1880'),
										'end_date' => \Carbon\Carbon::parse('31-12-1885'),
										[
											'item' => 8
										],
									],
									'serie-107' => [
										'title' => 'DOCUMENTOS referentes às obras de iluminação pública da cidade de Juiz de Fora.',
										'description' => '',
										'start_date' => \Carbon\Carbon::parse('01-01-1872'),
										'end_date' => \Carbon\Carbon::parse('31-12-1889'),
										[
											'item' => 95
										],
										[
											'subserie-107.1' => [
												'title' => 'Documentos referentes a arrematação do serviço de iluminação pública de Juiz de Fora.',
												'start_date' => \Carbon\Carbon::parse('01-01-1872'),
												'end_date' => \Carbon\Carbon::parse('31-12-1889'),
												[
													'item' => 23
												],
											],
											'subserie-107.2' => [
												'title' => 'Documentos contendo propostas (aceitas,recusadas e sem definição) apresentadas à Câmara referentes à iluminação pública.',
												'start_date' => \Carbon\Carbon::parse('01-01-1873'),
												'end_date' => \Carbon\Carbon::parse('31-12-1889'),
												[
													'item' => 72
												],
											],
										]
									],
									'serie-108' => [
										'title' => 'DOCUMENTOS referentes à arrematação de obras de construçaõ e reforma do Matadouro Público.
										Contém documentos referentes a obras no Curral do Conselho.',
										'description' => '',
										'start_date' => \Carbon\Carbon::parse('01-01-1863'),
										'end_date' => \Carbon\Carbon::parse('31-12-1889'),
										[
											'item' => 25
										],
									],
									'serie-109' => [
										'title' => 'DOCUMENTOS referentes a obras de conserto e conservação do Jardim Municipal e Praça do Mercado.',
										'description' => '',
										'start_date' => \Carbon\Carbon::parse('01-01-1875'),
										'end_date' => \Carbon\Carbon::parse('31-12-1886'),
										[
											'item' => 20
										],
									],
									'serie-110' => [
										'title' => 'DOCUMENTOS referentes à construção e reforma de passeios públicos.',
										'description' => '',
										'start_date' => \Carbon\Carbon::parse('01-01-1887'),
										'end_date' => \Carbon\Carbon::parse('31-12-1888'),
										[
											'item' => 13
										],
									],
									'serie-111' => [
										'title' => 'DOCUMENTOS referentes ao levantamento da planta cadastral de Juiz de Fora.',
										'description' => '',
										'start_date' => \Carbon\Carbon::parse('01-01-1869'),
										'end_date' => \Carbon\Carbon::parse('31-12-1884'),
										[
											'item' => 21
										],
									],
									'serie-112' => [
										'title' => 'DOCUMENTOS referentes a obra do construção de pontes e pontilhões.',
										'description' => '',
										'start_date' => \Carbon\Carbon::parse('01-01-1855'),
										'end_date' => \Carbon\Carbon::parse('31-12-1889'),
										[
											'item' => 150
										],
										[
											'subserie-112.1' => [
												'title' => 'Documentos referentes à arrematação de obras em pontes e pontilhões.',
												'start_date' => \Carbon\Carbon::parse('01-01-1855'),
												'end_date' => \Carbon\Carbon::parse('31-12-1888'),
												[
													'item' => 26
												],
											],
											'subserie-112.2' => [
												'title' => 'Documentos diversos referentes a obras em pontes e pontilhões.',
												'start_date' => \Carbon\Carbon::parse('01-01-1855'),
												'end_date' => \Carbon\Carbon::parse('31-12-1888'),
												[
													'item' => 32
												],
											],
											'subserie-112.3' => [
												'title' => 'Documentos referentes a orçamentos para execução de obras em pontes e pontilhões.',
												'start_date' => \Carbon\Carbon::parse('01-01-1857'),
												'end_date' => \Carbon\Carbon::parse('31-12-1887'),
												[
													'item' => 41
												],
											],
											'subserie-112.4' => [
												'title' => 'Documentos referentes a propostas de arrematação de obras em pontes e pontilhões.',
												'start_date' => \Carbon\Carbon::parse('01-01-1857'),
												'end_date' => \Carbon\Carbon::parse('31-12-1889'),
												[
													'item' => 51
												],
											],
										]
									],
									'serie-113' => [
										'title' => '.DOCUMENTOS referentes a obras de construção e reformas de ruas (nivelamentos,calçamentos,abertu-
										ra ).',
										'description' => '',
										'start_date' => \Carbon\Carbon::parse('01-01-1854'),
										'end_date' => \Carbon\Carbon::parse('31-12-1888'),
										[
											'item' => 100
										],
										[
											'subserie-113.1' => [
												'title' => 'Documentos referentes à arrematação de obras de construção e reforma de ruas.',
												'start_date' => \Carbon\Carbon::parse('01-01-1854'),
												'end_date' => \Carbon\Carbon::parse('31-12-1888'),
												[
													'item' => 29
												],
											],
											'subserie-113.2' => [
												'title' => 'Documentos referentes a orçamentos para a execução de obras de construção e reforma de ruas.',
												'start_date' => \Carbon\Carbon::parse('01-01-1861'),
												'end_date' => \Carbon\Carbon::parse('31-12-1882'),
												[
													'item' => 10
												],
											],
											'subserie-113.3' => [
												'title' => 'Documentos referentes a propostas (aceitas,recusadas,sem definição) de arrematação de obras de construção e reformas de ruas.',
												'start_date' => \Carbon\Carbon::parse('01-01-1863'),
												'end_date' => \Carbon\Carbon::parse('31-12-1888'),
												[
													'item' => 47
												],
											],
											'subserie-113.4' => [
												'title' => 'Documentos diversos referentes a obras de construção e reformas de ruas.',
												'start_date' => \Carbon\Carbon::parse('01-01-1866'),
												'end_date' => \Carbon\Carbon::parse('31-12-1880'),
												[
													'item' => 14
												],
											],
										]
									],
									'serie-114' => [
										'title' => 'DOCUMENTOS referentes a diversas obras públicas.',
										'description' => '',
										'start_date' => \Carbon\Carbon::parse('01-01-1861'),
										'end_date' => \Carbon\Carbon::parse('31-12-1889'),
										[
											'item' => 52
										],
									],
								]
							],
							'subsection-6' => [
								'title' => 'ÓRGÃOS MUNICIPAIS',
								[
									'serie-115' => [
										'title' => 'DOCUMENTOS referentes à Cadeia  Pública Municipal.',
										'description' => '',
										'start_date' => \Carbon\Carbon::parse('01-01-1854'),
										'end_date' => \Carbon\Carbon::parse('31-12-1889'),
										[
											'item' => 105
										],
										[
											'subserie-115.1' => [
												'title' => 'Documentos do Carcereiro.',
												'start_date' => \Carbon\Carbon::parse('01-01-1859'),
												'end_date' => \Carbon\Carbon::parse('31-12-1887'),
												[
													'item' => 0
												],
											],
											'subserie-115.2' => [
												'title' => 'Correspondência enviada à Câmara por delegados de polícia referente ao sustento de presos pobres.',
												'start_date' => \Carbon\Carbon::parse('01-01-1854'),
												'end_date' => \Carbon\Carbon::parse('31-12-1889'),
												[
													'item' => 63
												],
											],
											'subserie-115.3' => [
												'title' => 'Correspondência de particulares à Câmara referente ao sustento de presos pobres.',
												'start_date' => \Carbon\Carbon::parse('01-01-1859'),
												'end_date' => \Carbon\Carbon::parse('31-12-1889'),
												[
													'item' => 34
												],
											],
											'subserie-115.4' => [
												'title' => 'Editais referentes a arrematação de alimentação de presos pobres.',
												'start_date' => \Carbon\Carbon::parse('01-01-1866'),
												'end_date' => \Carbon\Carbon::parse('31-12-1867'),
												[
													'item' => 3
												],
											],
											'subserie-115.5' => [
												'title' => 'Documentos referentes a propostas enviada por particulares à Câmara para a realização de serviços de água, iluminação e limpeza de cadeia.',
												'start_date' => \Carbon\Carbon::parse('01-01-1878'),
												'end_date' => \Carbon\Carbon::parse('31-12-1886'),
												[
													'item' => 10
												],
											],
										]
									],
									'serie-116' => [
										'title' => 'DOCUMENTOS referentes ao Cemitério Municipal.',
										'description' => '',
										'start_date' => \Carbon\Carbon::parse('01-01-1864'),
										'end_date' => \Carbon\Carbon::parse('31-12-1889'),
										[
											'item' => 1736
										],
										[
											'subseriie-116.1' => [
												'title' => 'Documentos referentes ao Cemitério Municipal. Contém um livro com atestados e documentos sobre sepultamentos, convites para enterros e um regulamento de cemitérios públicos.',
												'start_date' => \Carbon\Carbon::parse('01-01-1865'),
												'end_date' => \Carbon\Carbon::parse('31-12-1888'),
												[
													'item' => 42
												],
											],
											'subseriie-116.2' => [
												'title' => 'Atestados de óbitos.',
												'start_date' => \Carbon\Carbon::parse('01-01-1864'),
												'end_date' => \Carbon\Carbon::parse('31-12-1889'),
												[
													'item' => 850
												],
											],
											'subseriie-116.3' => [
												'title' => 'Documentos referentes a sepultamentos no Cemitério Municipal.',
												'start_date' => \Carbon\Carbon::parse('01-01-1864'),
												'end_date' => \Carbon\Carbon::parse('31-12-1889'),
												[
													'item' => 770
												],
											],
											'subseriie-116.4' => [
												'title' => 'Relatórios feitos pelo Administrador do Cemitério Municipal referentes a sepultamentos.',
												'start_date' => \Carbon\Carbon::parse('01-01-1865'),
												'end_date' => \Carbon\Carbon::parse('31-12-1889'),
												[
													'item' => 74
												],
											],
										]
									],
									'serie-117' => [
										'title' => 'DOCUMENTOS referentes ao Curral do Conselho.',
										'description' => '',
										'start_date' => \Carbon\Carbon::parse('01-01-1863'),
										'end_date' => \Carbon\Carbon::parse('31-12-1897'),
										[
											'item' => 20
										],
										[
											'subserie-117.1' => [
												'title' => 'Documentos diversos referentes ao Curral do Conselho. Contém um regulamento provisório do Curral.',
												'start_date' => \Carbon\Carbon::parse('01-01-1863'),
												'end_date' => \Carbon\Carbon::parse('31-12-1882'),
												[
													'item' => 19
												],
											],
											'subserie-117.2' => [
												'title' => 'Livro de registro das multas sobre animais que dão entrada e saída no Curral do Conselho. O livro está incompleto.',
												'start_date' => \Carbon\Carbon::parse('01-01-1880'),
												'end_date' => \Carbon\Carbon::parse('31-12-1897'),
												[
													'item' => 1
												],
											],
										]
									],
									'serie-118' => [
										'title' => 'DOCUMENTOS referentes ao Matadouro Municipal.',
										'description' => '',
										'start_date' => \Carbon\Carbon::parse('01-01-1863'),
										'end_date' => \Carbon\Carbon::parse('31-12-1889'),
										[
											'item' => 33
										],
									],
								]
							],
							'subsection-7' => [
								'title' => 'PROCURADOR DA CÂMARA',
								[
									'serie-119' => [
										'title' => 'CORRESPONDÊNCIA expedida pelo Procurador da Câmara de Juiz de Fora, tendo como destinatário o Presidente da Câmara.',
										'description' => 'Contém uma carta para o Presidente da Câmara de São João Nepomuceno, datada de 1871. Há vários documentos sem data.',
										'start_date' => \Carbon\Carbon::parse('01-01-1854'),
										'end_date' => \Carbon\Carbon::parse('31-12-1889'),
										[
											'item' => 275
										],
									],
									'serie-120' => [
										'title' => 'CORRESPONDÊNCIA recebida pelo Procurador da Câmara de Juiz de Fora.',
										'description' => '',
										'start_date' => \Carbon\Carbon::parse('01-01-1854'),
										'end_date' => \Carbon\Carbon::parse('31-12-1889'),
										[
											'item' => 111
										],
										[
											'subserie-120.1' => [
												'title' => 'Correspondência do Presidente e Secretario da Câmara ao Procurador.',
												'start_date' => \Carbon\Carbon::parse('01-01-1854'),
												'end_date' => \Carbon\Carbon::parse('31-12-1889'),
												[
													'item' => 47
												],
											],
											'subserie-120.2' => [
												'title' => 'Correspondência do Carcereiro ao Procurador, referente à Cadeia Pública.',
												'start_date' => \Carbon\Carbon::parse('01-01-1864'),
												'end_date' => \Carbon\Carbon::parse('31-12-1878'),
												[
													'item' => 20
												],
											],
											'subserie-120.3' => [
												'title' => 'Correspondência de diversos remetentes ao Procurador.',
												'start_date' => \Carbon\Carbon::parse('01-01-1855'),
												'end_date' => \Carbon\Carbon::parse('31-12-1886'),
												[
													'item' => 20
												],
											],
											'subserie-120.4' => [
												'title' => 'Correspondência do Escrivão de Paz ao Procurador. Contém uma carta do Juiz de Paz ao Procurador.',
												'start_date' => \Carbon\Carbon::parse('01-01-1861'),
												'end_date' => \Carbon\Carbon::parse('31-12-1888'),
												[
													'item' => 11
												],
											],
											'subserie-120.5' => [
												'title' => 'Correspondência do Fiscal e Agente Fiscal ao Procurador. Contém um mapa demonstrativo de multas impostos ao empresário da iluminação pública.',
												'start_date' => \Carbon\Carbon::parse('01-01-1861'),
												'end_date' => \Carbon\Carbon::parse('31-12-1888'),
												[
													'item' => 13
												],
											],
										]
									],
									'serie-121' => [
										'title' => 'DOCUMENTOS diversos do Procurador.',
										'description' => 'Contém cartas enviadas pelo Delegado de Polícia, Escrivão do Juri, Vigário, Tabelião e outros
										remetentes.',
										'start_date' => \Carbon\Carbon::parse('01-01-1868'),
										'end_date' => \Carbon\Carbon::parse('31-12-1889'),
										[
											'item' => 7
										],
									],
								]
							],
							'subsection-8' => [
								'title' => 'REQUERIMENTOS',
								[
									'serie-122' => [
										'title' => 'REQUERIMENTOS de particulares reclamando sobre bueiros, canais , valetas, pedindo construção e supressão de outros.',
										'description' => '',
										'start_date' => \Carbon\Carbon::parse('01-01-1859'),
										'end_date' => \Carbon\Carbon::parse('31-12-1889'),
										[
											'item' => 151,
										],
									],
									'serie-123' => [
										'title' => 'REQUERIMENTOS solicitando à Câmara providências em relação a caminhos diversos ( abertura, conservação, fechamento, mudança)',
										'description' => '',
										'start_date' => \Carbon\Carbon::parse('01-01-1854'),
										'end_date' => \Carbon\Carbon::parse('31-12-1889'),
										[
											'item' => 124,
										],
										[
											'subserie-123.1' => [
												'title' => 'Requerimentos relativos à abertura de caminhos à servidão pública.',
												'start_date' => \Carbon\Carbon::parse('01-01-1859'),
												'end_date' => \Carbon\Carbon::parse('31-12-1884'),
												[
													'item' => 19,
												],
											],
											'subserie-123.2' => [
												'title' => ' Requerimentos contendo reclamações sobre o estado de má conservação de caminhos.',
												'start_date' => \Carbon\Carbon::parse('01-01-1862'),
												'end_date' => \Carbon\Carbon::parse('31-12-1883'),
												[
													'item' => 9,
												],
											],
											'subserie-123.3' => [
												'title' => 'Requerimentos de fechamento de caminhos sem uso ou de díficil acesso.',
												'start_date' => \Carbon\Carbon::parse('01-01-1857'),
												'end_date' => \Carbon\Carbon::parse('31-12-1888'),
												[
													'item' => 29,
												],
											],
											'subserie-123.4' => [
												'title' => 'Requerimentos solicitando mudança de localização e traçado de caminhos públicos.',
												'start_date' => \Carbon\Carbon::parse('01-01-1874'),
												'end_date' => \Carbon\Carbon::parse('31-12-1887'),
												[
													'item' => 12,
												],
											],
											'subserie-123.5' => [
												'title' => '- Requerimentos contendo reclamações contra particulares devido a obstrução, fechamento e abertura de caminhos.',
												'start_date' => \Carbon\Carbon::parse('01-01-1857'),
												'end_date' => \Carbon\Carbon::parse('31-12-1887'),
												[
													'item' => 28,
												],
											],
											'subserie-123.6' => [
												'title' => ' Requerimentos diversos sobre caminhos. Contém alguns pareceres sobre reclamações de particulares.',
												'start_date' => \Carbon\Carbon::parse('01-01-1854'),
												'end_date' => \Carbon\Carbon::parse('31-12-1889'),
												[
													'item' => 28,
												],
											]
										]
									],
									'serie-124' => [
										'title' => 'REQUERIMENTOS referentes à contrução e reparos de chafarizes.',
										'description' => '',
										'start_date' => \Carbon\Carbon::parse('01-01-1853'),
										'end_date' => \Carbon\Carbon::parse('31-12-1889'),
										[
											'item' => 37,
										],
										[
											'subserie-124.1' => [
												'title' => 'Requerimentos referentes a nascentes de água e diversos.',
												'start_date' => \Carbon\Carbon::parse('01-01-1853'),
												'end_date' => \Carbon\Carbon::parse('31-12-1889'),
												[
													'item' => 16,
												],
											],
											'subserie-124.2' => [
												'title' => 'Requerimentos solicitando a colocação de chafarizes nas ruas de Juiz de Fora.',
												'start_date' => \Carbon\Carbon::parse('01-01-1881'),
												'end_date' => \Carbon\Carbon::parse('31-12-1889'),
												[
													'item' => 10,
												],
											],
											'subserie-124.3' => [
												'title' => 'Requerimentos solicitando providências contra a obstrução de chafarizes por particulares.',
												'start_date' => \Carbon\Carbon::parse('01-01-1857'),
												'end_date' => \Carbon\Carbon::parse('31-12-1880'),
												[
													'item' => 11,
												],
											]
										]
									],
									'serie-125' => [
										'title' => 'REQUERIMENTOS contendo reclamações e solicitando providências em relação a fiscais e agentes fiscais.',
										'description' => '',
										'start_date' => \Carbon\Carbon::parse('01-01-1860'),
										'end_date' => \Carbon\Carbon::parse('31-12-1889'),
										[
											'item' => 39,
										]
									],
									'serie-126' => [
										'title' => 'REQUERIMENTOS solicitando a colocação de lampiões de iluminação pública nas ruas da cidade.',
										'description' => '',
										'start_date' => \Carbon\Carbon::parse('01-01-1873'),
										'end_date' => \Carbon\Carbon::parse('31-12-1889'),
										[
											'item' => 32,
										]
									],
									'serie-127' => [
										'title' => 'REQUERIMENTOS contendo reclamações sobre impostos e solicitando sua redução ou alívio de multas.',
										'description' => '',
										'start_date' => \Carbon\Carbon::parse('01-01-1861'),
										'end_date' => \Carbon\Carbon::parse('31-12-1889'),
										[
											'item' => 85,
										],
										[
											'subserie-127.1' => [
												'title' => 'Requerimentos referentes a impostos.',
												'start_date' => \Carbon\Carbon::parse('01-01-1887'),
												'end_date' => \Carbon\Carbon::parse('31-12-1889'),
												[
													'item' => 22,
												],
											],
											'subserie-127.2' => [
												'title' => 'Requerimentos solicitando alívio de multas.',
												'start_date' => \Carbon\Carbon::parse('01-01-1861'),
												'end_date' => \Carbon\Carbon::parse('31-12-1889'),
												[
													'item' => 63,
												],
											]
										]
									],
									'serie-128' => [
										'title' => 'REQUERIMENTOS solicitando licença para abertura, continuação e baixa de negócios, exercício da profissão e obras. Contém também denúncias de falta de licenças.',
										'description' => '',
										'start_date' => \Carbon\Carbon::parse('01-01-1855'),
										'end_date' => \Carbon\Carbon::parse('31-12-1889'),
										[
											'item' => 155,
										],
										[
											'subserie-128.1' => [
												'title' => 'Requerimentos solicitando licença para abertura de boticas e farmácias.',
												'start_date' => \Carbon\Carbon::parse('01-01-1857'),
												'end_date' => \Carbon\Carbon::parse('31-12-1889'),
												[
													'item' => 9,
												],
											],
											'subserie-128.2' => [
												'title' => 'Requerimentos solicitando licença para abertura de casas de negócios ( secos e molhados, sapataria, ferraria, etc).',
												'start_date' => \Carbon\Carbon::parse('01-01-1855'),
												'end_date' => \Carbon\Carbon::parse('31-12-1857'),
												[
													'item' => 34,
												],
											],


											'subserie-128.3' => [
												'title' => 'Requerimentos solicitando baixa nas licenças para casas de negócios.',
												'start_date' => \Carbon\Carbon::parse('01-01-1876'),
												'end_date' => \Carbon\Carbon::parse('31-12-1889'),
												[
													'item' => 12,
												],
											],
											'subserie-128.4' => [
												'title' => 'Requerimentos contendo reclamações referentes a licenças para abertura de negócios e exercícios de profissões',
												'start_date' => \Carbon\Carbon::parse('01-01-1858'),
												'end_date' => \Carbon\Carbon::parse('31-12-1889'),
												[
													'item' => 7,
												],
											],
											'subserie-128.5' => [
												'title' => 'Requerimentos solicitando licenças diversas.',
												'start_date' => \Carbon\Carbon::parse('01-01-1868'),
												'end_date' => \Carbon\Carbon::parse('31-12-1889'),
												[
													'item' => 17,
												],
											],
											'subserie-128.6' => [
												'title' => 'Requerimentos solicitando licença para a execução de obras por particulares',
												'start_date' => \Carbon\Carbon::parse('01-01-1860'),
												'end_date' => \Carbon\Carbon::parse('31-12-1889'),
												[
													'item' => 47,
												],
											],
											'subserie-128.7' => [
												'title' => 'Requerimentos solicitando licença para conduzir veículos.',
												'start_date' => \Carbon\Carbon::parse('01-01-1870'),
												'end_date' => \Carbon\Carbon::parse('31-12-1887'),
												[
													'item' => 27,
												],
											]
										]
									]
								],
								'serie-129' => [
									'title' => 'REQUERIMENTOS referentes a naturalização de estrangeiros.',
									'description' => '',
									'start_date' => \Carbon\Carbon::parse('01-01-1858'),
									'end_date' => \Carbon\Carbon::parse('31-12-1874'),
									[
										'item' => 23,
									]
								],
								'serie-130' => [
									'title' => ' REQUERIMENTOS solicitando a concessão de pena dágua.',
									'description' => '',
									'start_date' => \Carbon\Carbon::parse('01-01-1887'),
									'end_date' => \Carbon\Carbon::parse('31-12-1889'),
									[
										'item' => 257,
									]
								],
								'serie-131' => [
									'title' => 'REQUERIMENTOS referentes à construção e reforma de pontes e pontilhões.',
									'description' => '',
									'start_date' => \Carbon\Carbon::parse('01-01-1864'),
									'end_date' => \Carbon\Carbon::parse('31-12-1889'),
									[
										'item' => 75,
									]
								],
								'serie-132' => [
									'title' => 'REQUERIMENTOS contendo reclamações e solicitando a abertura, construção e nivelamento de ruas de Juiz de Fora.',
									'description' => '',
									'start_date' => \Carbon\Carbon::parse('01-01-1854'),
									'end_date' => \Carbon\Carbon::parse('31-12-1889'),
									[
										'item' => 79,
									],
									[
										'subserie-132.1' => [
											'title' => ' Requerimento solicitando a abertura, conclusão e manutenção da largura atual de ruas.',
											'start_date' => \Carbon\Carbon::parse('01-01-1863'),
											'end_date' => \Carbon\Carbon::parse('31-12-1889'),
											[
												'item' => 21,
											],
										],
										'subserie-132.2' => [
											'title' => 'Requerimentos contendo reclamações e solicitando o calçamento de ruas e outros.',
											'start_date' => \Carbon\Carbon::parse('01-01-1876'),
											'end_date' => \Carbon\Carbon::parse('31-12-1883'),
											[
												'item' => 9,
											],
										],
										'subserie-132.3' => [
											'title' => 'Requerimentos contendo reclamações sobre o estado de conservação de ruas e pedindo providências.',
											'start_date' => \Carbon\Carbon::parse('01-01-1870'),
											'end_date' => \Carbon\Carbon::parse('31-12-1888'),
											[
												'item' => 16,
											],
										],
										'subserie-132.4' => [
											'title' => 'Requerimentos solicitando nivelamento e alinhamento de ruas e passeios.',
											'start_date' => \Carbon\Carbon::parse('01-01-1854'),
											'end_date' => \Carbon\Carbon::parse('31-12-1889'),
											[
												'item' => 33,
											],
										]
									]
								],
								'serie-133' => [
									'title' => 'REQUERIMENTOS diversos.',
									'description' => '',
									'start_date' => \Carbon\Carbon::parse('01-01-1854'),
									'end_date' => \Carbon\Carbon::parse('31-12-1889'),
									[
										'item' => 402,
									]
								]
							],

							'subsection-10' => [
								'title' => 'SECRETARIA DA CÂMARA',
								[
									'serie-134' => [
										'title' => 'CORRESPONDÊNCIA expedida pelo Secretário da Câmara Municipal de Juiz de Fora.',
										'start_date' => \Carbon\Carbon::parse('01-01-1856'),
										'end_date' => \Carbon\Carbon::parse('31-12-1889'),
										[
											'item' => 68,
										],
										[
											'subserie-134.1' => [
												'title' => 'Correspondência expedida pelo Secretário da Câmara ao Presidente da mesma.',
												'start_date' => \Carbon\Carbon::parse('01-01-1856'),
												'end_date' => \Carbon\Carbon::parse('31-12-1889'),
												[
													'item' => 55,
												],
											],
											'subserie-134.2' => [
												'title' => 'Correspondência expedida pelo Secretário da Câmara aos Vereadores.',
												'start_date' => \Carbon\Carbon::parse('01-01-1864'),
												'end_date' => \Carbon\Carbon::parse('31-12-1888'),
												[
													'item' => 12,
												],
											],
											'subserie-134.3' => [
												'title' => 'Correspondência expedida pelo Secretário da Câmara a particulares.',
												'start_date' => \Carbon\Carbon::parse('01-01-1864'),
												'end_date' => \Carbon\Carbon::parse('31-12-1889'),
												[
													'item' => 6,
												],
											],
										],
									],
									'serie-135' => [
										'title' => 'CORRESPONDÊNCIA (rascunhos ) expedida pelo Secretário da Câmara a diversos destinatários. Contém diversos documentos sobre o cólera.',
										'start_date' => \Carbon\Carbon::parse('01-01-1853'),
										'end_date' => \Carbon\Carbon::parse('31-12-1889'),
										[
											'item' => 459,
										],
									],
									'serie-136' => [
										'title' => 'LIVRO de registro de cópias de correspondência expedida pela Câmara. O livro está danificado e sem encadernação. Está incompleto, começando na página 10. Em um dos documentos há solicitação de medidas para prospecção de petróleo em Juiz de Fora.',
										'start_date' => \Carbon\Carbon::parse('01-01-1869'),
										'end_date' => \Carbon\Carbon::parse('31-12-1887'),
										[
											'item' => 448,
										],
									],
									'serie-137' => [
										'title' => 'CORRESPONDÊNCIA recebida pelo Secretário da Câmara enviada por diversos remetentes.',
										'start_date' => \Carbon\Carbon::parse('01-01-1856'),
										'end_date' => \Carbon\Carbon::parse('31-12-1889'),
										[
											'item' => 68,
										],
										[
											'subserie-137.1' => [
												'title' => 'Correspondência enviada pelo Fiscal e Agente Fiscal ao Secretário da Câmara.',
												'start_date' => \Carbon\Carbon::parse('01-01-1857'),
												'end_date' => \Carbon\Carbon::parse('31-12-1889'),
												[
													'item' => 55,
												],
											],
											'subserie-137.2' => [
												'title' => 'Correspondência enviada por particulares ao Secretário da Câmara.',
												'start_date' => \Carbon\Carbon::parse('01-01-1856'),
												'end_date' => \Carbon\Carbon::parse('31-12-1889'),
												[
													'item' => 12,
												],
											],
											'subserie-137.3' => [
												'title' => 'Correspondência do Presidente da Câmara ao Secretário. Contém documentos relativos a eleições, juízes, limpeza pública, nomeações para cargos públicos, obras públicas, saúde pública, vereadores, etc. Contém ainda uma nomeação para o cargo de Secretário.',
												'start_date' => \Carbon\Carbon::parse('01-01-1857'),
												'end_date' => \Carbon\Carbon::parse('31-12-1887'),
												[
													'item' => 6,
												],
											],
										],
									],
									'serie-138' => [
										'title' => 'RECIBOS de entrega de ofícios e livros referentes a eleições e qualificação de votantes, enviados pela Câmara Municipal.',
										'start_date' => \Carbon\Carbon::parse('01-01-1853'),
										'end_date' => \Carbon\Carbon::parse('31-12-1881'),
										[
											'item' => 62,
										],
									]
								],
							],
						],
					],
					'section-3' => [
						'title' => 'COMISSÕES DA CÂMARA DE VEREADORES',
						[
							'subsection-1' => [
								'title' => 'COMISSÕES DA CÂMARA DE VEREADORES',
								[
									'serie-139' => [
										'title' => 'DOCUMENTOS da Comissão de Censos.',
										'start_date' => \Carbon\Carbon::parse('01-01-1855'),
										'end_date' => \Carbon\Carbon::parse('31-12-1861'),
										[
											'item' => 14,
										],
									],
									'serie-140' => [
										'title' => 'DOCUMENTOS de Comissões especiais.',
										'description' => 'Trata-se de comissões de caráter não permanente, nomeadas especialmente para exame e parecer sobre
										assuntos específicos.',
										'start_date' => \Carbon\Carbon::parse('01-01-1853'),
										'end_date' => \Carbon\Carbon::parse('31-12-1888'),
										[
											'item' => 68,
										],
										[
											'subserie-140.1' => [
												'title' => 'Documentos contendo nomeação de comissões especiais e a aquiescência de seus membros.
												Contém um documento da comissão para alistamento de voluntários para a guerra do Paraguai
												( 1865 ) .',
												'start_date' => \Carbon\Carbon::parse('01-01-1855'),
												'end_date' => \Carbon\Carbon::parse('31-12-1888'),
												[
													'item' => 55,
												],
											],
											'subserie-140.2' => [
												'title' => 'Pareceres de comissões especiais sobre assuntos diversos.',
												'start_date' => \Carbon\Carbon::parse('01-01-1853'),
												'end_date' => \Carbon\Carbon::parse('31-12-1888'),
												[
													'item' => 12,
												],
											]
										],
									],
									'serie-141' => [
										'title' => 'DOCUMENTOS da Comissão de Fazenda.',
										'start_date' => \Carbon\Carbon::parse('01-01-1857'),
										'end_date' => \Carbon\Carbon::parse('31-12-1889'),
										[
											'item' => 68,
										],
										[
											'subserie-141.1' => [
												'title' => 'Documentos diversos da Comissão de Fazenda.',
												'start_date' => \Carbon\Carbon::parse('01-01-1857'),
												'end_date' => \Carbon\Carbon::parse('31-12-1889'),
												[
													'item' => 55,
												],
											],
											'subserie-141.2' => [
												'title' => 'Pareceres da Comissão de Fazenda sobre assuntos diversos. Referentes a aumento de ordenado, contas da Câmara ( ano financeiro ), custos, despesas com epidemias, emendas, obras, pagamentos ( farmacêuticos, credores da exposição, etc. ) , projetos ( de orçamentos e posturas) e outros assuntos.',
												'start_date' => \Carbon\Carbon::parse('01-01-1857'),
												'end_date' => \Carbon\Carbon::parse('31-12-1887'),
												[
													'item' => 12,
												],
											],
											'subserie-141.3' => [
												'title' => 'Pareceres da comissão de Fazenda sobre custos judiciais.',
												'start_date' => \Carbon\Carbon::parse('01-01-1883'),
												'end_date' => \Carbon\Carbon::parse('31-12-1887'),
												[
													'item' => 6,
												],
											],
										],
									],
									'serie-142' => [
										'title' => 'OCUMENTOS da Comissão de Legislação.',
										'description' => 'Contém pareceres sobre diversos assuntos: Código de Posturas, epidemias, impostos, pagamento de custos, obras públicas ( abastecimento de água, estradas, etc. ) e outros assuntos.',
										'start_date' => \Carbon\Carbon::parse('01-01-1864'),
										'end_date' => \Carbon\Carbon::parse('31-12-1889'),
										[
											'item' => 288,
										],
									],
									'serie-143' => [
										'title' => 'DOCUMENTOS da Comissão de Obras Públicas.',
										'start_date' => \Carbon\Carbon::parse('01-01-1855'),
										'end_date' => \Carbon\Carbon::parse('31-12-1889'),
										[
											'item' => 68,
										],
										[
											'subserie-143.1' => [
												'title' => 'Documentos referentes a pareceres sobre consultas do Alinhador à Comissão de Obras Públicas.',
												'start_date' => \Carbon\Carbon::parse('01-01-1857'),
												'end_date' => \Carbon\Carbon::parse('31-12-1889'),
												[
													'item' => 55,
												],
											],
											'subserie-143.2' => [
												'title' => 'Documentos da Comissão de Obras Públicas referentes a obras na Cadeia. Contém um parecer
												da comissão sobre um ofício enviado pelo Delegado de Polícia, referente ao sustento de presos
												pobres.',
												'start_date' => \Carbon\Carbon::parse('01-01-1855'),
												'end_date' => \Carbon\Carbon::parse('31-12-1882'),
												[
													'item' => 12,
												],
											],
											'subserie-143.3' => [
												'title' => 'Documento da Comissão de Obras Públicas referentes a obras no Cemitério.',
												'start_date' => \Carbon\Carbon::parse('01-01-1855'),
												'end_date' => \Carbon\Carbon::parse('31-12-1889'),
												[
													'item' => 6,
												],
											],
											'subserie-143.4' => [
												'title' => 'Pareceres da Comissão de Obras Públicas sobre relatórios de Fiscais.',
												'start_date' => \Carbon\Carbon::parse('01-01-1858'),
												'end_date' => \Carbon\Carbon::parse('31-12-1887'),
												[
													'item' => 6,
												],
											],
											'subserie-143.5' => [
												'title' => 'Documentos da Comissão de Obras Públicas sobre orçamentos para a execução de obras
												diversas.',
												'start_date' => \Carbon\Carbon::parse('01-01-1855'),
												'end_date' => \Carbon\Carbon::parse('31-12-1889'),
												[
													'item' => 6,
												],
											],
											'subserie-143.6' => [
												'title' => 'Pareceres da Comissão de Obras Públicas sobre obras em vias públicas, pontes e pontilhões.',
												'start_date' => \Carbon\Carbon::parse('01-01-1855'),
												'end_date' => \Carbon\Carbon::parse('31-12-1889'),
												[
													'item' => 6,
												],
											],
											'subserie-143.7' => [
												'title' => 'Pareceres da Comissão de Obras Públicas sobre assuntos diversos.',
												'start_date' => \Carbon\Carbon::parse('01-01-1856'),
												'end_date' => \Carbon\Carbon::parse('31-12-1887'),
												[
													'item' => 6,
												],
											],
											'subserie-143.8' => [
												'title' => 'Documentos diversos da Comissão de Obras Públicas.',
												'start_date' => \Carbon\Carbon::parse('01-01-1853'),
												'end_date' => \Carbon\Carbon::parse('31-12-1883'),
												[
													'item' => 6,
												],
											],
										],
									],
									'serie-144' => [
										'title' => 'DOCUMENTOS da Comissão de Polícia Municipal.',
										'description' => '',
										'start_date' => \Carbon\Carbon::parse('01-01-1861'),
										'end_date' => \Carbon\Carbon::parse('31-12-1884'),
										[
											'item' => 68,
										],
										[
											'subserie-144.1' => [
												'title' => 'Pareceres da Comissão de Polícia Municipal sobre petições.',
												'start_date' => \Carbon\Carbon::parse('01-01-1872'),
												'end_date' => \Carbon\Carbon::parse('31-12-1886'),
												[
													'item' => 55,
												],
											],
											'subserie-144.2' => [
												'title' => 'Pareceres da Comissão de Polícia Municipal sobre relatórios de Fiscais.',
												'start_date' => \Carbon\Carbon::parse('01-01-1865'),
												'end_date' => \Carbon\Carbon::parse('31-12-1883'),
												[
													'item' => 12,
												],
											],
											'subserie-144.3' => [
												'title' => 'Pareceres da Comissão de Polícia Municipal sobre assuntos diversos.',
												'start_date' => \Carbon\Carbon::parse('01-01-1861'),
												'end_date' => \Carbon\Carbon::parse('31-12-1884'),
												[
													'item' => 6,
												],
											],
										],
									],

									'serie-145' => [
										'title' => 'DOCUMENTOS da Comissão de Saúde Pública.',
										'start_date' => \Carbon\Carbon::parse('01-01-1855'),
										'end_date' => \Carbon\Carbon::parse('31-12-1889'),
										[
											'item' => 60,
										],
									],
									'serie-146' => [
										'title' => 'DOCUMENTOS da Comissão de Subscrição de Fundos para fins diversos.',
										'description' => '',
										'start_date' => \Carbon\Carbon::parse('01-01-1859'),
										'end_date' => \Carbon\Carbon::parse('31-12-1889'),
										[
											'item' => 68,
										],
										[
											'subserie-146.1' => [
												'title' => 'Documentos contendo recusa em compor a Comissão de Subscrição.',
												'start_date' => \Carbon\Carbon::parse('01-01-1859'),
												'end_date' => \Carbon\Carbon::parse('31-12-1884'),
												[
													'item' => 55,
												],
											],
											'subserie-146.2' => [
												'title' => 'Documentos diversos da Comissão de Subscrição.',
												'start_date' => \Carbon\Carbon::parse('01-01-1854'),
												'end_date' => \Carbon\Carbon::parse('31-12-1889'),
												[
													'item' => 12,
												],
											]
										],
									],
								]
							],
							'subsection-2' => [
								'title' => 'INDICAÇÕES APRESENTADAS EM SESSÕES DA CÂMARA',
								[
									'serie-147' => [
										'title' => 'INDICAÇÕES referentes a adiamento de sessões da Câmara.',
										'start_date' => \Carbon\Carbon::parse('01-01-1883'),
										'end_date' => \Carbon\Carbon::parse('31-12-1889'),
										[
											'item' => 7,
										],
									],
									'serie-148' => [
										'title' => 'INDICAÇÕES contendo agradecimentos, felicitações e votos de louvor.',
										'start_date' => \Carbon\Carbon::parse('01-01-1857'),
										'end_date' => \Carbon\Carbon::parse('31-12-1888'),
										[
											'item' => 15,
										],
									],
									'serie-149' => [
										'title' => 'INDICAÇÕES referentes à Cadeia.',
										'start_date' => \Carbon\Carbon::parse('01-01-1858'),
										'end_date' => \Carbon\Carbon::parse('31-12-1883'),
										[
											'item' => 28,
										],
									],
									'serie-150' => [
										'title' => 'INDICAÇÕES referentes a concorrência para obras diversas.',
										'start_date' => \Carbon\Carbon::parse('01-01-1884'),
										'end_date' => \Carbon\Carbon::parse('31-12-1889'),
										[
											'item' => 11,
										],
									],
									'serie-151' => [
										'title' => 'INDICAÇÕES referentes a eleições diversas.',
										'start_date' => \Carbon\Carbon::parse('01-01-1865'),
										'end_date' => \Carbon\Carbon::parse('31-12-1887'),
										[
											'item' => 9,
										],
									],
									'serie-152' => [
										'title' => 'INDICAÇÕES referentes ao ensino público.',
										'start_date' => \Carbon\Carbon::parse('01-01-1860'),
										'end_date' => \Carbon\Carbon::parse('31-12-1887'),
										[
											'item' => 12,
										],
									],
									'serie-153' => [
										'title' => 'INDICAÇÕES referentes a nomeação para diversos cargos municipais.',
										'start_date' => \Carbon\Carbon::parse('01-01-1853'),
										'end_date' => \Carbon\Carbon::parse('31-12-1889'),
										[
											'item' => 99,
										],
									],
									'serie-154' => [
										'title' => 'INDICAÇÕES referentes ao Matadouro Municipal.',
										'start_date' => \Carbon\Carbon::parse('01-01-1856'),
										'end_date' => \Carbon\Carbon::parse('31-12-1878'),
										[
											'item' => 22,
										],
									],
									'serie-155' => [
										'title' => 'INDICAÇÕES referentes à construção da Praça do Mercado Municipal.',
										'start_date' => \Carbon\Carbon::parse('01-01-1857'),
										'end_date' => \Carbon\Carbon::parse('31-12-1874'),
										[
											'item' => 16,
										],
									],
									'serie-156' => [
										'title' => 'INDICAÇÕES referentes a diversas obras públicas. Inclui a Estrada de Ferro D. Pedro II, cadeia, cemitério, etc.',
										'start_date' => \Carbon\Carbon::parse('01-01-1855'),
										'end_date' => \Carbon\Carbon::parse('31-12-1889'),
										[
											'item' => 458,
										],
									],
									'serie-157' => [
										'title' => 'INDICAÇÕES referentes a denominação de ruas e praças de Juiz de Fora.',
										'start_date' => \Carbon\Carbon::parse('01-01-1870'),
										'end_date' => \Carbon\Carbon::parse('31-12-1889'),
										[
											'item' => 6,
										],
									],
									'serie-158' => [
										'title' => 'INDICAÇÕES referentes à saúde pública.',
										'start_date' => \Carbon\Carbon::parse('01-01-1855'),
										'end_date' => \Carbon\Carbon::parse('31-12-1889'),
										[
											'item' => 9,
										],
									],
									'serie-159' => [
										'title' => 'INDICAÇÕES referentes a verbas dispendidas com o Presidente e o Procurador da Câmara de Juiz de Fora.',
										'start_date' => \Carbon\Carbon::parse('01-01-1857'),
										'end_date' => \Carbon\Carbon::parse('31-12-1889'),
										[
											'item' => 40,
										],
									],
									'serie-160' => [
										'title' => 'INDICAÇÕES diversas.',
										'start_date' => \Carbon\Carbon::parse('01-01-1854'),
										'end_date' => \Carbon\Carbon::parse('31-12-1889'),
										[
											'item' => 375,
										],
									],
								]
							],
							'subsection-3' => [
								'title' => 'REQUERIMENTOS E PROPOSTAS DE VEREADORES',
								[
									'serie-161' => [
										'title' => 'REQUERIMENTOS de vereadores apresentados em sessões da Câmara de Juiz de Fora.',
										'description' => '',
										'start_date' => \Carbon\Carbon::parse('01-01-1857'),
										'end_date' => \Carbon\Carbon::parse('31-12-1889'),
										[
											'item' => 68,
										],
										[
											'subserie-161.1' => [
												'title' => 'Requerimentos de vereadores referentes a diversos assuntos.',
												'start_date' => \Carbon\Carbon::parse('01-01-1857'),
												'end_date' => \Carbon\Carbon::parse('31-12-1889'),
												[
													'item' => 55,
												],
											],
											'subserie-161.2' => [
												'title' => 'Requerimentos de vereadores referentes a obras públicas.',
												'start_date' => \Carbon\Carbon::parse('01-01-1857'),
												'end_date' => \Carbon\Carbon::parse('31-12-1889'),
												[
													'item' => 12,
												],
											],

										],
									],
									'serie-162' => [
										'title' => 'PROPOSTAS apresentadas por vereadores em sessões da Câmara de Juiz de Fora.',
										'description' => '',
										'start_date' => \Carbon\Carbon::parse('01-01-1853'),
										'end_date' => \Carbon\Carbon::parse('31-12-1889'),
										[
											'item' => 68,
										],
										[
											'subserie-162.1' => [
												'title' => 'Propostas apresentadas por vereadores referentes a assuntos diversos.',
												'start_date' => \Carbon\Carbon::parse('01-01-1854'),
												'end_date' => \Carbon\Carbon::parse('31-12-1889'),
												[
													'item' => 55,
												],
											],
											'subserie-162.2' => [
												'title' => 'Propostas apresentadas por vereadores, referentes a admissão e demissão de funcionários da
												            Câmara.',
												'start_date' => \Carbon\Carbon::parse('01-01-1853'),
												'end_date' => \Carbon\Carbon::parse('31-12-1889'),
												[
													'item' => 12,
												],
											],
											'subserie-162.3' => [
												'title' => 'Propostas apresentadas por vereadores referentes a obras públicas.',
												'start_date' => \Carbon\Carbon::parse('01-01-1857'),
												'end_date' => \Carbon\Carbon::parse('31-12-1889'),
												[
													'item' => 6,
												],
											],
										],
									],
								]
							],
							'subsection-4' => [
								'title' => 'OUTROS DOCUMENTOS DE VEREADORES',
								[
									'serie-163' => [
										'title' => 'DOCUMENTOS referentes a posturas municipais.',
										'description' => '',
										'start_date' => \Carbon\Carbon::parse('01-01-1853'),
										'end_date' => \Carbon\Carbon::parse('31-12-1889'),
										[
											'item' => 68,
										],
										[
											'subserie-163.1' => [
												'title' => 'Documentos referentes ao Código de Posturas municipais.
												Contém projetos de código de posturas e outros documentos, inclusive o texto impresso do
												Código de Posturas de 1860.',
												'start_date' => \Carbon\Carbon::parse('01-01-1857'),
												'end_date' => \Carbon\Carbon::parse('31-12-1863'),
												[
													'item' => 55,
												],
											],
											'subserie-163.2' => [
												'title' => 'Documentos contendo emendas adicionais, substitutivas e supressivas referentes a artigos e
												parágrafos do Código de Posturas.',
												'start_date' => \Carbon\Carbon::parse('01-01-1857'),
												'end_date' => \Carbon\Carbon::parse('31-12-1887'),
												[
													'item' => 12,
												],
											],
											'subserie-163.3' => [
												'title' => 'Documentos referentes a propostas de artigos adicionais às Posturas Municipais. Estas
												propostas foram aprovadas pela Câmara.',
												'start_date' => \Carbon\Carbon::parse('01-01-1853'),
												'end_date' => \Carbon\Carbon::parse('31-12-1889'),
												[
													'item' => 6,
												],
											],
										],
									],
									'serie-164' => [
										'title' => 'ATAS ( rascunhos ) de sessões da Câmara Municipal de Juiz de Fora.',
										'start_date' => \Carbon\Carbon::parse('01-01-1857'),
										'end_date' => \Carbon\Carbon::parse('31-12-1889'),
										[
											'item' => 224,
										],
									],
									'serie-165' => [
										'title' => 'CARTAS de vereadores ao Presidente da Câmara de Juiz de Fora justificando ausência a sessões da Câmara. Algumas cartas estão sem data. Não há cartas referentes a ausência no ano de 1880.',
										'start_date' => \Carbon\Carbon::parse('01-01-1853'),
										'end_date' => \Carbon\Carbon::parse('31-12-1889'),
										[
											'item' => 756,
										],
									],
									'serie-166' => [
										'title' => 'CONVOCAÇÕES de vereadores para sessões da Câmara. Inclui quatro confirmações de comparecimento.',
										'start_date' => \Carbon\Carbon::parse('01-01-1854'),
										'end_date' => \Carbon\Carbon::parse('31-12-1878'),
										[
											'item' => 17,
										],
									],
									'serie-167' => [
										'title' => 'DOCUMENTOS diversos referentes a sessões da Câmara de Vereadores.',
										'start_date' => \Carbon\Carbon::parse('01-01-1857'),
										'end_date' => \Carbon\Carbon::parse('31-12-1889'),
										[
											'item' => 17,
										],
									],
									'serie-168' => [
										'title' => 'CORRESPONDÊNCIA entre a Câmara de Juiz de Fora e Vereadores.',
										'description' => '',
										'start_date' => \Carbon\Carbon::parse('01-01-1857'),
										'end_date' => \Carbon\Carbon::parse('31-12-1888'),
										[
											'item' => 68,
										],
										[
											'subserie-168.1' => [
												'title' => 'Correspondência referente à posse no cargo de vereador.',
												'start_date' => \Carbon\Carbon::parse('01-01-1865'),
												'end_date' => \Carbon\Carbon::parse('31-12-1888'),
												[
													'item' => 55,
												],
											],
											'subserie-168.2' => [
												'title' => 'Correspondência apresentando justificativas para não assumir o cargo de vereador .',
												'start_date' => \Carbon\Carbon::parse('01-01-1857'),
												'end_date' => \Carbon\Carbon::parse('31-12-1888'),
												[
													'item' => 12,
												],
											]
										],
									],
								]
							],
						],
					],
					'section-4' => [
						'title' => 'ENTIDADES PRIVADAS',
						[
							'subsection-1' => [
								'title' => 'SEM SUBSEÇÃO',
								[
									'serie-169' => [
										'title' => 'DOCUMENTOS referentes a Bancos.',
										'description' => 'Contém correspondência enviadas à Câmara pelos seguintes bancos: Banco do Brasil (1885-1888, 29
										ítens ); Banco Territorial e Mercantil de Minas (1888, 1 ítem ); José de Souza Lima e Cia.; com casa
										bancária (1870, 1 ítem) e 37 ações do Banco Del Credere, de 1887.',
										'start_date' => \Carbon\Carbon::parse('01-01-1870'),
										'end_date' => \Carbon\Carbon::parse('31-12-1888'),
										[
											'item' => 56,
										],
									],
									'serie-170' => [
										'title' => 'DOCUMENTOS referentes à Cia. Ferro Carril Bonde de Juiz de Fora.',
										'start_date' => \Carbon\Carbon::parse('01-01-1880'),
										'end_date' => \Carbon\Carbon::parse('31-12-1882'),
										[
											'item' => 23,
										],
									],
									'serie-171' => [
										'title' => 'DOCUMENTOS referentes à iluminação elétrica em Juiz de Fora sob a responsabilidade da Cia. Mineira de Eletricidade.',
										'start_date' => \Carbon\Carbon::parse('01-01-1883'),
										'end_date' => \Carbon\Carbon::parse('31-12-1889'),
										[
											'item' => 34,
										],
									],
									'serie-172' => [
										'title' => 'CORRESPONDÊNCIA enviada pela Cia. Telefônica do Brasil à Câmara de Juiz de Fora, referente
										a colocação de postes na cidade. Contém documentos de 1889 referentes à disputa da telefônica com
										a Cia. Mineira de Eletricidade devido à instalação da primeira.',
										'start_date' => \Carbon\Carbon::parse('01-01-1883'),
										'end_date' => \Carbon\Carbon::parse('31-12-1889'),
										[
											'item' => 30,
										],
									],
									'serie-173' => [
										'title' => 'DOCUMETOS referentes à Cia. União Indústria.',
										'description' => 'Contém correspondência entre a Cia. e a Câmara referente a diversos assuntos: pontes, oferecimentos
										de serviços ( epidemia ), plantas, multas e orçamento, além de uma escritura de compra de bens pela
										Cia. Há também documentos referentes à Escola Agrícola 1a União Indústria.',
										'start_date' => \Carbon\Carbon::parse('01-01-1854'),
										'end_date' => \Carbon\Carbon::parse('31-12-1885'),
										[
											'item' => 59,
										],
									],
									'serie-174' => [
										'title' => 'CORRESPONDÊNCIA enviada pela Cia. União Mineira à Câmara Municipal de Juiz de Fora.',
										'description' => 'A correspondência encaminha relatórios anuais de trabalho da Cia., que não estão em anexo.',
										'start_date' => \Carbon\Carbon::parse('01-01-1878'),
										'end_date' => \Carbon\Carbon::parse('31-12-1882'),
										[
											'item' => 9,
										],
									],
									'serie-175' => [
										'title' => 'CORRESPONDÊNCIA enviada à Câmara de Juiz de Fora por diversos estabelecimentos comerciais.',
										'start_date' => \Carbon\Carbon::parse('01-01-1884'),
										'end_date' => \Carbon\Carbon::parse('31-12-1888'),
										[
											'item' => 4,
										],
									],
									'serie-176' => [
										'title' => 'CORRESPONDÊNCIA enviada à Câmara de Juiz de Fora por diversos jornais.',
										'description' => 'Os jornais são os seguintes: Correio de Juiz de Fora, Diário de Minas, Gazeta da Tarde, Gazeta de Juiz de Fora, O Pharol, Província de Minas e outros. As cartas referem-se principalmente à publicação do expediente da Câmara.',
										'start_date' => \Carbon\Carbon::parse('01-01-1865'),
										'end_date' => \Carbon\Carbon::parse('31-12-1889'),
										[
											'item' => 95,
										],
									],
									'serie-177' => [
										'title' => 'CORRESPONDÊNCIA enviada à Câmara de Juiz de Fora por diversas entidades.',
										'description' => 'Contém correspondência da Associação de Imigração, Associação Industrial, Club de Engenharia, Colégio Abílio ( de Barbacena ), Cia Zootécnica e Agrícola do Brasil, Sociedade União dos Fabricantes de Bebidas e outros produtos nacionais, Sociedade de Medicina e Cirurgia de Juiz de Fora, Club da Lavoura e Comércio, Cia. Industrial Mineira.',
										'start_date' => \Carbon\Carbon::parse('01-01-1881'),
										'end_date' => \Carbon\Carbon::parse('31-12-1889'),
										[
											'item' => 37,
										],
									],
								]
							]
						],
					],
					'section-5' => [
						'title' => 'Seção DOCUMENTOS DE TERCEIROS',
						[
							'subsection-1' => [
								'title' => 'SEM SUBSEÇÃO',
								[
									'serie-178' => [
										'title' => 'DOCUMENTOS de terceiros.',
										'description' => 'Contém correspondência do escravo Jeromano Gomes ao Secretário da Câmara, pedindo para ser por ele comprado ( sem data ) etc.',
										'start_date' => \Carbon\Carbon::parse('01-01-1864'),
										'end_date' => \Carbon\Carbon::parse('31-12-1888'),
										[
											'item' => 21,
										],
									]
								]
							]
						],
					],
				],
			],
		];

		$this->saveMap($elements);
	}

	private function saveMap($data, ?int $parentEntityId = null)
	{
		foreach ($data as $dataKey => $dataContent) {
			if ($dataKey == 'item') {
				$itemCounter = 1;
				do {
					$archiveEntity = new ArchiveEntity();
					$archiveEntity->title = 'Item ' . $itemCounter;
					$archiveEntity->description_level_id = self::DESCRIPTION_LEVEL_MAP['item'];
					$archiveEntity->parent_entity_id = $parentEntityId;
					$archiveEntity->save();
					$itemCounter++;
					$dataContent--;
				} while ($dataContent != 0);
			} else {
				$archiveEntity = new ArchiveEntity();
				$archiveEntity->save();

				foreach ($dataContent as $contentKey => $contentValue) {
					if (\is_string($contentKey)) {
						$attributeName = preg_replace('/[0-9]+|[-.]/', '', $contentKey);
						$attributeNumber = preg_replace('/[a-zA-Z]|[-.]/', '', $contentKey);
						$archiveEntity->$attributeName = $contentValue;
					} else {
						$this->saveMap($contentValue, $archiveEntity->id);
					}
				}
				$descriptionLevel = preg_replace('/[0-9]+|[-.]/', '', $dataKey);
				$attributeNumber = preg_replace('/[a-zA-Z]|[-.]/', '', $dataKey);
				$archiveEntity->description_level_id = self::DESCRIPTION_LEVEL_MAP[$descriptionLevel];
				$archiveEntity->parent_entity_id = $parentEntityId;
				$archiveEntity->save();
			}
		}
	}
}