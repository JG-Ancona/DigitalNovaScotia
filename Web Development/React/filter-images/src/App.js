import React, { Component } from 'react';
import Items from './Items'; // load up the information of Items
import ItemInfo from './components/ItemInfo'
import Search from './components/Search'

class App extends Component {

  constructor(props) {
    super(props);

    this.state = {
      items: [],
      filter: [],
      search: '' // keyword
    };

    this.onSearch = this.onSearch.bind(this)
  }

  componentDidMount() {}

  onSearch(keyword) {
    console.log(keyword)
    const list = []
    for (const item in Items) {
      if (Items[item].name === keyword) {
        // TODO fix functionality to be case insensitive, contains rather than equals
        list.push(Items[item])
      }
    }
    this.setState({ items: list })
  }

  onFilter() {
    // filters
  }

  findFilter() {

  }

  findItem() {

  }

  alreadyIn() {

  }

  clearAll() {

  }

  render() {
    const list = []
    for (const item in this.state.items) {
      list.push(
        <ItemInfo key={item} item={Items[item]} />
      )
    }
    return (
      <div className="background-white">
        <div className="background-blue white-text">

          <Search onSearch={this.onSearch}/>
        </div>

        <div className="grid-page">
          <div className="grid-page-column">
            <div className="box border shade3">
              <p className="header-text black-text font">Filter</p>
              <input className="button background-gray" type="button" value="Clear All" onClick={this.clearAll} />

            </div>
          </div>

          <div className="grid-page-column">
            <div className="horizontal-bar"></div>
          </div>

          <div className="grid-page-column">
            <div className="grid-result-header">
              <div className="grid-result-header-column">
                <p className="header-text black-text font">Results</p>
              </div>
              <div className="grid-result-header-column">
                <p className="small-text gray-text font">
                  Returned 13 results
                </p>
              </div>
            </div>
              {list}
          </div>
        </div>
      </div>
    );
  }
}

export default App;
