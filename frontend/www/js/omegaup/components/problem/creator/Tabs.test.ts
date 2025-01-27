import { createLocalVue, mount } from '@vue/test-utils';

import Tabs from './Tabs.vue';
import BootstrapVue, { IconsPlugin } from 'bootstrap-vue';
import T from '../../../lang';

const localVue = createLocalVue();
localVue.use(BootstrapVue);
localVue.use(IconsPlugin);

describe('Tabs.vue', () => {
  it('Should contain all 4 tabs', async () => {
    const wrapper = mount(Tabs, { localVue });

    const expectedText = [
      T.problemCreatorStatement,
      T.problemCreatorCode,
      T.problemCreatorTestCases,
      T.problemCreatorSolution,
    ];

    // BootstrapVue takes a tick to render the content inside the tabs
    wrapper.vm.$nextTick(() => {
      const buttons = wrapper.findAll('span[name="tab"]');
      expect(expectedText.length).toEqual(buttons.length);
      for (let i = 0; i < buttons.length; i++) {
        expect(buttons.at(i).text()).toEqual(expectedText[i]);
      }
    });
  });
});
